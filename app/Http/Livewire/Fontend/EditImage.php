<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class EditImage extends Component
{
    public function render()
    {
        return view('livewire.fontend.edit-image')->extends('frontend/layouts/base');
    }
}
