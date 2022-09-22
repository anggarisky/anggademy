<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class FrontController extends Controller
{
    //
    public function course()
    {
        $latest_courses = Course::orderBy('id', 'DESC')->take(6)->get();
        return view('front/course', compact('latest_courses'));
    }
}