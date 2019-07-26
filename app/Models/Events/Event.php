<?php

namespace App\Models\Events;

use App\Models\Attendance;
use App\Models\Site;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model {
    protected $fillable = [
        'site_id',
        'event_type',
        'start_time',
        'has_attendance',
        'data',
    ];

    protected $attributes = [
        'event_type' => self::TYPE,
        'has_attendance' => 0,
    ];

    const TYPE = 'other';
    const LABEL = 'Other';

    protected $requires_response = false;

    public function attendances(): HasMany {
        return $this->hasMany(Attendance::class);
    }

    public function site(): BelongsTo {
        return $this->belongsTo(Site::class);
    }
}
