<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class products extends Model
{
    use HasFactory;

    protected function Categories():HasOne {
        return $this->hasOne(categories::class);
    }
    protected function comments ():HasMany {
        return $this->hasMany(comment::class);
    }
}
