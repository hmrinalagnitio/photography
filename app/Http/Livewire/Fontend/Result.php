<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class Result extends Component
{
    public function render()
    {
        return view('livewire.fontend.result')->extends('frontend/layouts/base');
    }
}
