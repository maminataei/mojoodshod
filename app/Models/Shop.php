<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = "shops";
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'theme_id',
        'description',
    ];
}
