<?php

use App\Livewire\PageCategory;
use App\Livewire\PageHome;
use App\Livewire\SingleCategory;
use App\Livewire\SingleProduct;
use App\Livewire\PageFeedback;
use Illuminate\Support\Facades\Route;

Route::get('/', PageHome::class)->name('page.home');
Route::get('/category', PageCategory::class)->name('page.category');
Route::get('/category/{category_slug}', SingleCategory::class)->name('single.category');
Route::get('/category/{category_slug}/product/{product_slug}', SingleProduct::class)->name('single.product');
Route::get('/feedback', PageFeedback::class)->name('page.feedback');
