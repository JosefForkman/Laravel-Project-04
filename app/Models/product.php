<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected function Categories () {
        return $this->hasOne(categories::class);
    }
    protected function comments () {
        return $this->hasMany(comment::class);
    }
}
