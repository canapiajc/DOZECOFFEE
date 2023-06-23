<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $quantityCount = 0;
    public function render()
    {
        return view('livewire.counter');
    }
    public function decrementQuantity()
    {
       $this->quantityCount--;
    }
    public function incrementQuantity()
    {
        
        $this->quantityCount++;
    }
}
