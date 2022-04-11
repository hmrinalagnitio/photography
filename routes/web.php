<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Fontend\Home;
use App\Http\Livewire\Fontend\EditImage;
use App\Http\Livewire\Fontend\ImgUpload;
use App\Http\Livewire\Fontend\ImgUploadSuccess;
use App\Http\Livewire\Fontend\MyAccount;


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



require __DIR__.'/auth.php';
