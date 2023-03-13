<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bought extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'users_id',
        'quantity'
    ];
}
