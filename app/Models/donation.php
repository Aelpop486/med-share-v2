<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class donation extends Model
{
    use HasFactory;

    protected $table = "donations";

    protected $fillable = [
        'description',
        'status',
        'user_id',
        'city_id',
        'charity_id',
        'adress_id',
    ];

    public function charity() : BelongsTo
    {
        return $this->belongsTo(charit::class);
    }

    public function images() : HasMany
    {
        return $this->hasMany(donation_image::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function address() : BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

}
