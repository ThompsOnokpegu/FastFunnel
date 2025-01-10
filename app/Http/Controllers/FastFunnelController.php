<?php

namespace App\Http\Controllers;

use App\Services\PaystackService;
use Illuminate\Http\Request;

class FastFunnelController extends Controller
{
    //

    public function handleCallBack(Request $request){
        $paystack = new PaystackService;
        $response = $paystack->handleCallback($request);
        return view('thank-you',compact('response'));
    }

    public function handleDownload(){
        //PDF file is stored under /public/uploads
        $file= public_path(). "/uploads/TheFastFunnel.pdf";
        
        $headers = [
            'Content-Type' => 'application/pdf',
         ];

        return response()->download($file, 'TheFastFunnel.pdf', $headers);
    }
}
