<?php

namespace App\Models\Events;

use App\Scopes\PracticeEventScope;

class PracticeEvent extends Event {
    const TYPE = 'practice';
    const LABEL = 'Practice';

    protected static function boot(): void {
        parent::boot();
        static::addGlobalScope(new PracticeEventScope());
        static::creating(function ($query) {
            $query->event_type = self::TYPE;
        });
    }
}
