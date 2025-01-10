<?php

use App\Http\Controllers\FastFunnelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/fastfunnel',function(){
    return view('fastfunnel');
})->name('fast-funnel');

Route::get('/thank-you',[FastFunnelController::class,'handleCallBack'])->name('callback');
Route::get('/04822a07-faec-4598-985f-fd79362ad9e8',[FastFunnelController::class,'handleDownload'])->name('download');

Route::get('/email',function(){
    return view('emails.download-instructions');
});