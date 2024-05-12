<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'name',
    ];

    public function addresses() : HasMany
    {
        return $this->hasMany(Address::class);
    }
    public function donations() : HasMany
    {
        return $this->hasMany(donation::class);
    }
}
