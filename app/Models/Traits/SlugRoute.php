<?php

namespace App\Models\Traits;

/**
 * return string $slug
 */
trait SlugRoute
{
    function getRouteKeyName()
    {
        return 'slug';
    }
}
