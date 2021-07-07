<?php

namespace App\Models;

use App\Models\Traits\{Slugable, SlugRoute};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory, SlugRoute, Slugable;
    public $timestamps = false;
    protected $fillable = ['title', 'content', 'date_created', 'slug'];
}
