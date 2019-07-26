<?php

namespace App\Models\Events;

use App\Scopes\GameEventScope;

class GameEvent extends Event {
    const TYPE = 'game';
    const LABEL = 'Game';

    protected $requires_response = true;

    protected static function boot(): void {
        parent::boot();
        static::addGlobalScope(new GameEventScope());
        static::creating(function ($query) {
            $query->event_type = self::TYPE;
        });
    }
}
