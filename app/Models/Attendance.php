<?php

namespace App\Models;

use App\Models\Events\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model {
    protected $fillable = [
        'event_id',
        'player_id',
        'is_attending',
        'has_responded',
        'url_access_key',
    ];

    public function event(): BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function player(): BelongsTo {
        return $this->belongsTo(Player::class);
    }
}
