<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Url extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['url','urlShortened'];

    static function getUniqueShortUrl()
    {
        $urlShortened = Str::random(10);

        if (self::where('urlShortened', $urlShortened)->count() > 0) {
            return self::getUniqueShortUrl();
        }

        return $urlShortened;
    }
}
