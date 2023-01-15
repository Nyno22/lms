<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Purchases;

class CourseController extends Controller
{
    public function index($course)
    {
        $courses = Courses::where([['lang', '=', $course]])->get();

        return view('courses', compact('courses'));
    }

    public function viewcourse($course_id)
    {
        $id = auth()->user()->id;
        $course = Courses::with('user')->FindorFail($course_id);
        $count = Purchases::where([['course_id', '=', $course_id],['user_id', '=', $id]])->count();

        if($count>0)
        {
            $purchases = Purchases::where([['course_id', '=', $course_id],['user_id', '=', $id]])->FirstorFail();
        }else{
            $purchases = '0';
        }

        //dd($purchases);

        return view('decourse', compact('course','purchases'));
    }
}
