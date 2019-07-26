<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Player extends Model {
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
