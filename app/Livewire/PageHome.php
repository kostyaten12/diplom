<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Главная')]
class PageHome extends Component
{
    public function render()
    {
        return view('livewire.page-home');
    }
}
