<?php
namespace App\DaysOfWeek;
class DaysOfWeek
{
    function daysOfWeek(){
        $JoursSemaine = [
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
            'Samedi',
            'Dimanche'
        ];
        return compact('JoursSemaine');
    }
}
