<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class products extends Model
{
    use HasFactory;

    public function categorie(): HasOne
    {
        return $this->hasOne(categories::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(comment::class);
    }
}
