<?php
namespace App\Services;


use App\Mail\DownloadInstructions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use App\Notifications\InitialSetupNotification;
use Illuminate\Support\Facades\Mail;

class PaystackService
{
    protected $secretKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->secretKey = env('PAYSTACK_SECRET_KEY');
        $this->baseUrl = env('PAYSTACK_PAYMENT_URL');
    }

    // ubscription payment
    public function initiatePayment($email, $amount, $reference, $planCode, $callbackUrl)
    {
        $data = [
            'email' => $email,
            'amount' => $amount * 100, // Convert to kobo
            'reference' => $reference,
            'plan' => $planCode,
            'callback_url' => $callbackUrl
        ];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->baseUrl}/transaction/initialize", $data);

        return $response;
    }
    
    //one-time payment
    public function onetimePayment($email, $amount, $reference, $currency, $callbackUrl){
        $data = [
            'email' => $email,
            'amount' => $amount * 100, // Convert to kobo
            'reference' => $reference,
            'currency' => $currency,
            'callback_url' => $callbackUrl
        ];
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->post("{$this->baseUrl}/transaction/initialize", $data);

        return $response;
    }
    public function handleCallback(Request $request)
    {
        $reference = $request->query('reference');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->secretKey,
            'Content-Type' => 'application/json',
        ])->get("{$this->baseUrl}/transaction/verify/{$reference}");

        return $response;
    }

    public function handleWebhook(Request $request){
        //Log::debug('Webhook fired');
        // Check if it's a POST request with Paystack signature header
        if ((strtoupper($_SERVER['REQUEST_METHOD']) != 'POST' ) || !array_key_exists('HTTP_X_PAYSTACK_SIGNATURE', $_SERVER) ) {
            exit();
        }

        // Retrieve the payload from the request
        $payload = $request->getContent();

        // Retrieve the Paystack signature from the request headers
        $paystackSignature = $request->header('X-Paystack-Signature');

        // Calculate your own HMAC signature
        $generatedSignature = hash_hmac('sha512', $payload, env('PAYSTACK_SECRET_KEY'));
        
        // Verify if the Paystack signature matches the generated one
        if ($paystackSignature === $generatedSignature) {
            Log::debug('Signature okay!');
            $payload = $request->all();//array
            $event = $payload['event'];
           
            switch ($event) {
                case 'subscription.create':
                    $this->handleSubscriptionCreate($payload);
                    return response('Webhook Processed', 200);
                case 'invoice.update':
                    $this->handleInvoiceUpdate($payload);
                    return response('Webhook Processed', 200);
                case 'subscription.disable':
                    $this->handleSubscriptionComplete($payload);
                    return response('Webhook Processed', 200);
                case 'charge.success':
                    Log::debug('success event fired');
                    $this->handleOnetimePayment($payload);
                    return response('Webhook Processed',200);
                default:
                    # code...
                    break;
            }
        }
        
    }

    // Handles subscription creation event
    private function handleSubscriptionCreate($payload){
        
        $status = $payload['data']['status'];
        if($status == 'active'){
            $subscriptionCode = $payload['data']['subscription_code'];
            $customerCode = $payload['data']['customer']['customer_code'];
            $email = $payload['data']['customer']['email'];
            $planCode = $payload['data']['plan']['plan_code'];
            $authorizationCode = $payload['data']['authorization']['authorization_code'];
            $emailToken = $payload['data']['email_token'];

            $user = User::where('email',$email)->first(); 
            if($user){
                $user->update([
                    'subscribed' => true,
                    'status' => $status,
                    'subscription_end_date' => now()->addMonth(),
                    'plan_code' => $planCode,
                    'subscription_code' => $subscriptionCode,
                    'email_token' => $emailToken,
                    'customer_code' => $customerCode,
                    'authorization_code' => $authorizationCode,
                ]);
                //send reset password notification
                $token = Password::createToken($user);
                $user->notify(new InitialSetupNotification($token));
                // Send welcome email with course instructions
                Mail::to($user->email)->send(new CourseInstructions($user));
            }    
        }    
    }

    private function handleOnetimePayment($payload){
        $user = User::where('reference',$payload['data']['reference'])->first();
        Log::debug($user);
        if($user){
            $user->payment_status = 1;
            $user->save();    
            // Send confirmation email with download instructions
            Mail::to($user->email)->send(new DownloadInstructions($user));
        }
    }

    // Handles final status after invoice update
    private function handleInvoiceUpdate($payload){

         $paid = $payload['data']['paid'];//boolean
         $customerCode = $payload['data']['customer']['customer_code'];
         $status = $payload['data']['subscription']['status'];//string
         $user = User::where('customer_code', $customerCode)->first();
 
         if ($user) {
             $user->update([
                'subscribed' => $paid,
                'status' => $status,
                'subscription_end_date' => $paid ? now()->addMonth(): now(),
                'authorization_code' => $payload['data']['authorization']['authorization_code']
            ]);   
         }     
    }  
    
    //handles subscription status that changes from non-renewing to complete
    public function handleSubscriptionComplete($payload){
        $user = User::where('subscription_code',$payload['data']['subscription_code']);
        if($user){
            $user->update([
                'status' => $payload['data']['status'],
                'subscribed' => false
            ]);
        }
    }
}
