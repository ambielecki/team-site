<?php

namespace App\Scopes;

use App\Models\Events\GameEvent;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class GameEventScope implements Scope {
    public function apply(Builder $builder, Model $model): void {
        $builder->where('event_type', GameEvent::TYPE);
    }
}
