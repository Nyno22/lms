<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    
    public function index()
    {
        $t_id = auth()->user()->id;
        $courses = Courses::where([['teacher_id', '=', $t_id]])->count();

        return view('teachers.index', compact('courses'));
    }
}
