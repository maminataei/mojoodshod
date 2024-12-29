<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = "shops";
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'theme_id',
        'description',
    ];

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'shop_users')
            ->withPivot('role')
            ->withTimestamps();
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
