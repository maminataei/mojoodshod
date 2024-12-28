<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'price',
        'image_url',
        'stock_quantity',
    ];
}
