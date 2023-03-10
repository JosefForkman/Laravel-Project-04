<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'Content',
        'products_id',
        'users_id',
    ];
    protected function comments ():HasMany {
        return $this->hasMany(User::class, "id");
    }
}
