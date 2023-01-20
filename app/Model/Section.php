<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable =
    [
        'course_id',
        'video_id',
        'name'
    ];

    public function findCourse($id)
    {
        $course = Course::find($id);
        return $course;
    }

    public function videos()
    {
        $videos = Video::where('video_src',$this->id)->get();
        return $videos;
    }
}
