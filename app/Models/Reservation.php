<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;
     const STATUS_ACTIVE = 1;
     const STATUS_CANCELLED = 2;
    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function office (): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    protected $casts = [
        'status' => 'integer',
        'hidden' => 'boolean',
        'price' => 'integer',
        'start_date' => 'immutable_date',
        'end_date' => 'immutable_date',
    ];
}
