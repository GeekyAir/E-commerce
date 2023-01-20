<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =
    [
        'title',
        'video_src'
    ];

}
