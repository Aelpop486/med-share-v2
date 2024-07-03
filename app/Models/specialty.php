<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class specialty extends Model
{
    use HasFactory;

    protected $table = "specialties";

    protected $fillable = [
        'title',
        'image',
        'description',
        'admin_id',
    ];

    public function charties() : HasMany
    {
        return $this->hasMany(charit::class);
    }

    public function admin() : BelongsTo
    {
        return $this->belongsTo(admin::class);
    }

}

