<?php

namespace App\Livewire;

use App\Models\User;
use App\Services\PaystackService;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Str;

class FastFunnel extends Component
{
    
    #[Validate('required')]
    #[Validate('email')]
    public $billing_email;
    #[Validate('required')]
    #[Validate('min:3')]
    public $billing_name;
    //public $naira = 13000;
    // public $dollar = 20;
    // #[Validate('required')]
    public $amount = 7000;

    public function render()
    {
        return view('livewire.fast-funnel');
    }

    public function payOnce(){
        $paystack = new PaystackService;
        $this->validate();
        
        $amount = $this->amount;
        $reference = Str::uuid();//uuid4();
        $callbackUrl = route('callback');
        $currency = "NGN";
        $email = $this->billing_email;
        //dd($reference->toString());
        $response = $paystack->onetimePayment($email,$amount,$reference,$currency,$callbackUrl);

        if ($response['status']) {
            
            $user = User::where('email',$this->billing_email)->first();
            if(!$user){
                User::create([
                    'email' => $this->billing_email,
                    'amount' => $this->amount,
                    'name' => $this->billing_name,
                    'reference' => $reference,
                ]);
            }else{
                $user->update([
                    'reference' => $reference,
                    'amount' => $this->amount,
                    'name' => $this->billing_name
                ]);
            }
            
            $this->reset();
            return redirect($response['data']['authorization_url']);
        }
        return redirect()->back()->with('error', 'Unable to initiate payment');
    }
}
