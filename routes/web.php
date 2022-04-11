<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Fontend\Home;

// home controller

Route::get('/', Home::class);



require __DIR__.'/auth.php';
