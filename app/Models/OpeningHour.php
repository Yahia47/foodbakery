<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'day',
        'opening_time',
        'closing_time',
        'is_closed',
    ];

    protected $casts = [
        'opening_time' => 'string',
        'closing_time' => 'string',
        'is_closed' => 'boolean',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
