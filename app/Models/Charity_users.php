<?php

namespace App\Models;

use App\Models\charit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charity_users extends Model
{
    use HasFactory;

    protected $table = 'charity_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'role',
        'charity_id',
        'isActive',
    ];

    public function charity() : BelongsTo
    {
        return $this->belongsTo(charit::class);
    }
}
