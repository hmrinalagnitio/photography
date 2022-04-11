<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class ViewDetails extends Component
{
    public function render()
    {
        return view('livewire.fontend.view-details')->extends('frontend/layouts/base');
    }
}
