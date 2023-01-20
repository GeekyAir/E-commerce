<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =
    [
        'title',
        'point',
        'old_point',
        'rate',
        'img_url',
        'publisher_name',
        'short_description',
        'description'
    ];
}
