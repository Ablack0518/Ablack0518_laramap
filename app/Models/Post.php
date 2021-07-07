<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'published', 'slug', 'published_at', 'created_at', 'updated_at'];
    public $timestamps = false;
    //protected $dates = ['published_at'];//Permet de formater la date
    protected $casts = ['published_at' => 'datetime'];


    function setTitleAttribute($title)
    {
        //dd($title);
    }
}
