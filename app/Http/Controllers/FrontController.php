<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class FrontController extends Controller
{
    //
    public function course()
    {
        $latest_courses = Course::orderBy('id', 'DESC')->paginate(8);
        return view('front/course', compact('latest_courses'));
    }

    public function details($slug)
    {
        $course_details = Course::where([
            ['slug', '=', $slug],
        ])->first();
        
        if($course_details)
        {
            return view('front/details', compact('course_details'));
        }
    }
}