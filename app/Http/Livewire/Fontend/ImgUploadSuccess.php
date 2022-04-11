<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class ImgUploadSuccess extends Component
{
    public function render()
    {
        return view('livewire.fontend.img-upload-success')->extends('frontend/layouts/base');
    }
}
