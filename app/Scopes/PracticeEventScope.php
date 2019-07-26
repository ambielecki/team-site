<?php

namespace App\Scopes;

use App\Models\Events\PracticeEvent;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PracticeEventScope implements Scope{
    public function apply(Builder $builder, Model $model): void {
        $builder->where('event_type', PracticeEvent::TYPE);
    }
}
