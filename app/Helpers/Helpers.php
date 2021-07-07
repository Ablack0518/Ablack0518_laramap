<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Models\Url;

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return $date->format('d M Y h:i a');
    }
}

if (!function_exists('get_unique_short_url')) {
    function get_unique_short_url()
    {
        $urlShortened = Str::random(10);

        if (Url::where('urlShortened', $urlShortened)->count() > 0) {
            return get_unique_short_url();
        }

        return $urlShortened;
    }
}

if (!function_exists('getTitle')) {
    function getTitle($title)
    {
        $titleBase = 'Laramap - leaning';
        if ($title === '') {
            return $titleBase;
        } else {
            return $title . ' | ' . $titleBase;
        }
    }
}

if (!function_exists('setActiveClass')) {
    function setActiveClass($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}
