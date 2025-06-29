<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'product_slug',
        'description',
        'long_description',
        'price',
        'image',
        'category_id',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'image' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
