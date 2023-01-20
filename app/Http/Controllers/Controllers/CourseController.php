<?php

namespace App\Http\Controllers\Controllers;

use App\Model\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Section;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('education',[
            'courses'=>$courses
        ]);
    }

    public function storeCourse(Request $request)
    {
        $file_extension1 = $request -> img_url -> getClientOriginalExtension();
        $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
        $path = 'images/Course';
        $request -> img_url -> move($path,$file_name1 );

        Course::create([
            'title'=> $request->title,
            'point'=> $request->point,
            'old_point'=> $request->old_point,
            'rate'=> '0.2',
            'img_url'=> $file_name1,
            'publisher_name'=> $request->publisher,
            'short_description'=> $request->short_description,
            'description'=> $request->description,
        ]);
            return redirect()->route('cpanel-index')->with('success','Course add Successfully');
    }

    public function editCourse($id)
    {
        $course = Course::find($id);
        return response()->json($course);
    }

    public function updateCourse(Request $request)
    {
        $course = Course::findOrFail($request->id);

        if($request -> img_url )
        {

            $file_extension1 = $request -> img_url -> getClientOriginalExtension();
            $file_name1 =  time() . '.' .'1' . '.'.$file_extension1;
            $path = 'images/Course';
            $request -> img_url -> move($path,$file_name1 );
        }
        else
        {
            $file_name1 = $course->img_url ;
        }

        $course->update([
            'title'=> $request->title,
            'point'=> $request->point,
            'old_point'=> $request->old_point,
            'rate'=> '0.2',
            'img_url'=> $file_name1,
            'publisher_name'=> $request->publisher,
            'short_description'=> $request->short_description,
            'description'=> $request->description,
        ]);

        return redirect()->route('cpanel-index')->with('success','Course Updated Successfully');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('cpanel-index')->with('success','Course Deleted Successfully');

    }

    public function courseDetails($id)
    {
        $course = Course::find($id);
        $sections = Section::where('course_id',$id)->get();
        return view('edu_details',[
            'course'=>$course,
            'sections'=>$sections
        ]);
    }
}
