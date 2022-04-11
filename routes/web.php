<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Fontend\Home;
use App\Http\Livewire\Fontend\EditImage;
use App\Http\Livewire\Fontend\ImgUpload;
use App\Http\Livewire\Fontend\ImgUploadSuccess;
use App\Http\Livewire\Fontend\MyAccount;
use App\Http\Livewire\Fontend\PaymentNow;
use App\Http\Livewire\Fontend\Result;
// home controller

Route::get('/', Home::class);

// for edit image page
Route::get('/editcontest', EditImage::class);

// for img upload
Route::get('/imgupload', ImgUpload::class);
// for img upload sucessfull
Route::get('/imguploadsuccess', ImgUploadSuccess::class); 

//for myaccount
Route::get('/myaccount', MyAccount::class);

// for payment now
Route::get('/payment', PaymentNow::class);

// for result page 
Route::get('/result', Result::class); 


require __DIR__.'/auth.php';
