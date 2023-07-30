<?php

namespace App\Livewire\Counter;

use Livewire\Component;

class CounterChild extends Component
{
    public $count;

    public function render()
    {
        return view('livewire.counter.counter-child');
    }
}
