<?php

namespace App\Helpers;

//use App\Models\Event;
class EventsHelpers
{
    static function extraitsEvent($texte, $maxChar = 250)
    {
        if (mb_strlen($texte) <= $maxChar) {
            return $texte;
        }
        $last_space = mb_strpos($texte, " ", $maxChar);
        //substr($texte, 0, $maxChar);
        return mb_substr($texte, 0, $last_space) . "...";
    }
}
