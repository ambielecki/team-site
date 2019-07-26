<?php

namespace App\Models\Pages;

use App\Scopes\BlogPageScope;

class BlogPage extends Page {
    const TYPE = 'blog';

    protected static function boot(): void {
        parent::boot();
        static::addGlobalScope(new BlogPageScope());
        static::creating(function ($query) {
            $query->page_type = self::TYPE;
        });
    }
}
