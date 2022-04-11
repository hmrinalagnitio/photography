<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class ImgUpload extends Component
{
    public function render()
    {
        return view('livewire.fontend.img-upload')->extends('frontend/layouts/base');
    }
}
