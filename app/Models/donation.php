<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class donation extends Model
{
    use HasFactory;

    protected $table = "donations";

    protected $fillable = [
        'description',
        'status',
        'user_id',
        'charity_id',
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

}
