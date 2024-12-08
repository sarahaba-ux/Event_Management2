<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'rsvp',
    ];

    // Relationship with Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
