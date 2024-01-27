<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'name',
        "code",
        'category',
        'price',
        'stock',
        'capacity',
        'height',
        'width',
        'tube_diameter',
        'weight',
        'fire_rating',
    ];
}
