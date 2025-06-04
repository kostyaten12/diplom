<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_slug',
        'image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'image' => 'array'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
