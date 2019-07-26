<?php

namespace App\Models\Pages;

use App\Scopes\HomePageScope;

class HomePage extends Page {
    const TYPE = 'home';

    protected static function boot(): void {
        parent::boot();
        static::addGlobalScope(new HomePageScope());
        static::creating(function ($query) {
            $query->page_type = self::TYPE;
        });
    }
}
