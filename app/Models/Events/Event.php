<?php

namespace App\Models\Events;

use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model {
    protected $fillable = [
        'site_id',
        'event_type',
        'start_time',
        'data',
    ];

    protected $attributes = [
        'event_type' => self::TYPE,
    ];

    const TYPE = 'other';
    const LABEL = 'Other';

    public function site(): BelongsTo {
        return $this->belongsTo(Site::class);
    }
}
