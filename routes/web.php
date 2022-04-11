<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Fontend\Home;
use App\Http\Livewire\Fontend\EditImage;
use App\Http\Livewire\Fontend\ImgUpload;
use App\Http\Livewire\Fontend\ImgUploadSuccess;
use App\Http\Livewire\Fontend\MyAccount;
use App\Http\Livewire\Fontend\PaymentNow;
use App\Http\Livewire\Fontend\Result;
use App\Http\Livewire\Fontend\Status;
use App\Http\Livewire\Fontend\ViewDetails;


// home controller

Route::get('/', Home::class)->name('home');

// for edit image page
Route::get('/editcontest', EditImage::class)->name('editcontest');

// for img upload
Route::get('/imgupload', ImgUpload::class)->name('imgupload');
// for img upload sucessfull
Route::get('/imguploadsuccess', ImgUploadSuccess::class)->name('imguploadsuccess'); 

//for myaccount
Route::get('/myaccount', MyAccount::class)->name('myaccount');

// for payment now
Route::get('/payment', PaymentNow::class)->name('payment');

// for result page 
Route::get('/result', Result::class)->name('result'); 

// for status
Route::get('/status', Status::class)->name('status'); 

// for view details
Route::get('/viewdetails', ViewDetails::class)->name('viewdetails');


require __DIR__.'/auth.php';
