<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class Status extends Component
{
    public function render()
    {
        return view('livewire.fontend.status')->extends('frontend/layouts/base');
    }
}
