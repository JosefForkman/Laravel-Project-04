<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categories extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'Name'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(products::class, "id");
    }
}
