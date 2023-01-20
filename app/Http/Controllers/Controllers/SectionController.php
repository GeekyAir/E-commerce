<?php

namespace App\Http\Controllers\Controllers;

use App\Model\Video;
use App\Model\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function storeSection(Request $request)
        {
            Section::create([
                'name'=> $request->name,
                'course_id'=>$request->course,
                'video_id'=>'1'
            ]);

            return redirect()->route('cpanel-index')->with('success','Section has been Added');
        }

        public function editSection($id)
        {
            $section = Section::find($id);
            return response()->json($section);
        }

        public function updateSection(Request $request)
        {
            $section = Section::find($request->id);
            $section->update([
                'name'=>$request->name,
                'course_id'=>$request->course,
                'video_id'=>'1'
            ]);

            return redirect()->route('cpanel-index')->with('success','Section Updated Successfully');
        }

        public function deleteSection($id)
        {
            $section = Section::find($id);
            $section->delete();
            return redirect()->route('cpanel-index')->with('success','Section Deleted Successfully');
        }

        public function uploadVideo(Request $request)
        {
            if($request->video)
            {
                foreach($request->video as $video)
                {
                    $videoExtension = $video->getClientOriginalExtension();
                    $videoName = time(). '.' .'1' . '.'.$videoExtension;
                    $path = 'videos/section';
                    $video -> move($path,$videoName);
                    Video::create([
                        'title' => $videoName,
                        'video_src' =>$request ->video_src
                    ]);
                }

                return redirect()->route('cpanel-index')->with('success','Video Added Successfully');
            }
            else
            {
                return redirect()->route('cpanel-index')->with('error','Nothing selected');
            }

        }

        public function sectionId($id)
        {
            return response()->json($id);
        }

        public function showVideo($id)
        {
            $videos = Video::where('video_src',$id)->get();
            return view('videos',[
                'videos' => $videos
            ]);
        }

        public function getVideo($id)
        {
            $videos = Video::where('video_src',$id)->get();
            return response()->json($videos);
        }
}
