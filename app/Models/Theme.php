<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $table = "themes";
    protected $fillable = [
        'name',
        'preview_url',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
