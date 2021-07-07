<?php

namespace App\Helpers;

class PostsHelpers
{
    static function format_date($date)
    {
        return $date->format('d M Y h:i a');
    }
}