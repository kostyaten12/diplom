<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Специализации')]
class PageCategory extends Component
{
    public function render()
    {
        return view('livewire.page-category', [
            'categories' => Category::where("is_active", 1)->get(["id", "name", "image", "description", "category_slug"]),
        ]);
    }
}
