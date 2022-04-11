<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class MyAccount extends Component
{
    public function render()
    {
        return view('livewire.fontend.my-account')->extends('frontend/layouts/base');
    }
}
