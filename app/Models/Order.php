<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'shop_id',
        'customer_name',
        'customer_email',
        'total_amount',
        'status',
    ];
}
