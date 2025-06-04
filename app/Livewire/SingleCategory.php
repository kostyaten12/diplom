<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

#[Title('Врачи')]
class SingleCategory extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = Category::where('category_slug', $this->category_slug)->first();
        $products = $category->products()->where('is_active', true)->orderBy('updated_at', 'DESC')->get();
        return view('livewire.single-category', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
