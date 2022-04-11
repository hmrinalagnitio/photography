<?php

namespace App\Http\Livewire\Fontend;

use Livewire\Component;

class PaymentNow extends Component
{
    public function render()
    {
        return view('livewire.fontend.payment-now')->extends('frontend/layouts/base');
    }
}
