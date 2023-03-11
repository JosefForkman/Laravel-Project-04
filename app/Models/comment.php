<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'Content',
        'products_id',
        'users_id',
    ];
    protected function user ():HasOne {
        return $this->hasOne(User::class);
    }
}
