<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class donation_image extends Model
{
    use HasFactory;

    protected $table = "donation_images";

    protected $fillable = [
        'path',
        'donation_id',
    ];

    public function donation() : BelongsTo
    {
        return $this->belongsTo(donation::class);
    }
}
