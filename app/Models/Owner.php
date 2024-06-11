<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Owner extends Model
{
    use HasFactory;

    // protected static $unguarded = true;

    public function pets():HasMany {
        return $this->hasMany(Pet::class);
    }

    public function owners():HasMany {
        return $this->hasMany(Owner::class);
    }
}
