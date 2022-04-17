<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\AboutLeaditbd;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function welcomePage()
    {
        $about = AboutLeaditbd::first();
      
        return view('welcome',compact('about'));
    }

    public function courseDetails($slug)
    {

        $course = Course::with('course_details')->where('slug',$slug)->first();
        
        return view('courseDetails',compact('course'));
    }

    public function aboutForm()
    {
        return view('about');
    }

    public function aboutDb(Request $request)
    {
        AboutLeaditbd::truncate();
        $about = new AboutLeaditbd;
        $about->about = $request->about;
        $about->save();
        return redirect()->back();

    }
}
