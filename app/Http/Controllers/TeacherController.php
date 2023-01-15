<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courses;
use App\Models\Language;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where([['role', '=', 1]])->get();
        return view('teachers', compact('teachers'));
    }

    public function viewteacher($teacher)
    {
        $deteacher = User::findOrFail($teacher);
        
        return view('deteacher', compact('deteacher'));
    }

    public function viewcourses($teacher)
    {
        $deteacher = User::findOrFail($teacher);
        $decourses = Courses::with('language')->where([['teacher_id', '=', $teacher]])->get();
        $delanguage = Language::with('course')->get();
        return view('teachercourses', compact('deteacher','decourses','delanguage'));
    }

    public function viewteachercourses($teacher,$course)
    {
        $deteacher = User::findOrFail($teacher);
        $delanguage = Language::findOrFail($course);
        $decourses = Courses::with('language')->where([['id', '=', $course]])->get();
        return view('teachercourses', compact('deteacher','decourses','delanguage'));
    }
}
