<?php

namespace App\Models;

use App\Models\charit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charity_Contact extends Model
{
    use HasFactory;

    protected $table = "charity_contacts";

    protected $fillable = [
        'charity_id',
        'subject',
        'message',
    ];

    public function charity(): BelongsTo
    {
        return $this->belongsTo(charit::class);
    }
}
