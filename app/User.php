<?php

namespace App;

use App\Models\Player;
use App\Models\Site;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'is_admin', 'email', 'email_hash', 'phone_number', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean'
    ];

    public function players(): BelongsToMany {
        return $this->belongsToMany(Player::class)->withTimestamps();
    }

    public function ownedSites(): HasMany {
        return $this->hasMany(Site::class);
    }

    public function sites(): BelongsToMany {
        return $this->belongsToMany(Site::class)->withTimestamps();
    }
}
