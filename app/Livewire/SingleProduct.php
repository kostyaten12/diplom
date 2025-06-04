<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

#[Title('Врачи')]
class SingleProduct extends Component
{
    public $category_slug;
    public $product_slug;

    public function mount($category_slug, $product_slug)
    {
        $this->category_slug = $category_slug;
        $this->product_slug = $product_slug;
    }

    public function render()
    {
        $product = Product::where('product_slug', $this->product_slug)->first();

        return view('livewire.single-product', [
            'product' => $product,
        ]);
    }
}
