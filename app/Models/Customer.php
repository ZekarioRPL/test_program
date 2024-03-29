<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'name',
        "telephone",
        'email',
        'address',
        'city',
        'province',
        'pos_code',
        'npwp',
        'total_discount',
        'credit_limit_transaction',
    ];
}
