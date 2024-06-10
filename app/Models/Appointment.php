<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    public function pet(): BelongsTo {
        return $this->belongsTo(Pet::class);
    }

    public function appointments(): HasMany {
        return $this->hasMany(Appointment::class);
    }
}
