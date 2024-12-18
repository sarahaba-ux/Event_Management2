<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'event_date',
        'event_time',
        'event_url',
    ];
}
