<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseDetails;

use Illuminate\Http\Request;


class CourseDetailSController extends Controller
{

    public function addDetails($id)
    {
        
        $course = Course::with('course_details')->find($id);
        // return $course;
        return view('courseDetailsForm',compact('course'));
    }

    public function addDetailsDb(Request $request)
    {
        $courseDetails = CourseDetails::where('course_id',$request->course_id)->first();
        if (empty($courseDetails)) {
            $courseDetails = new CourseDetails;
        }
        $courseDetails->course_id = $request->course_id;
        $courseDetails->what_u_learn = $request->what_u_learn;
        $courseDetails->knowledge_requirment = $request->knowledge_requirment;
        $courseDetails->required_software = $request->required_software;
        $courseDetails->details = $request->details;
        $courseDetails->duration = $request->duration;
        
        if (isset($request->cover_photo)) {
            $image = $request->file('cover_photo');
        $imageName = 'image_'.time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('storage').'/upload/courseCover/', $imageName);
        $imgpath = '/upload/courseCover/'.$imageName;
        $courseDetails->cover_photo =  $imgpath;
        }
        
        $courseDetails->save();
        return redirect()->back();
    }

    public function show($id)
    {
       $course = Course::find($id)->with('course_details');
       return $course;
    }

    

    
}
