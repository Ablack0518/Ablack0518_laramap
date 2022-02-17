<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

/**
 * 
 */
trait Slugable
{
    protected static function bootSlugable()
    {
        // parent::boot();
        static::creating(function ($event) {
            $event->slug = str::slug('Event-' . $event->title . '-fotscaar itech');
        });
    }
}
