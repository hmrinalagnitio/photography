<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.fontend.home')->extends('frontend/layouts/base');
    }
}
