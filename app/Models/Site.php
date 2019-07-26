<?php

namespace App\Models;

use App\Models\Events\Event;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Site extends Model {
    protected $fillable = [
        'user_id',
        'team_name',
        'division_name',
        'league_name',
        'year',
        'slug',
        'css_file',
        'settings',
    ];

    public function events(): HasMany {
        return $this->hasMany(Event::class);
    }

    public function images(): HasMany {
        return $this->hasMany(Image::class);
    }

    public function players(): HasMany {
        return $this->hasMany(Player::class);
    }

    public function siteOwner(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
