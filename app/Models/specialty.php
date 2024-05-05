<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class specialty extends Model
{
    use HasFactory;

    protected $table = "specialties";

    protected $fillable = [
        'titel',
        'image',
        'description',
    ];

    public function charties() : HasMany
    {
        return $this->hasMany(charit::class);
    }

}

