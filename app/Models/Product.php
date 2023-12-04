<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_title',
        'category_id',
        'product_price',
        'product_length',
        'product_width'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
