<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index()
    {
        $t_id = auth()->user()->id;
        $courses = Courses::where([['teacher_id', '=', $t_id]])->get();
        return view('teachers.courses.index', compact('courses'));
    }

    public function create()
    {    
        return view('teachers.courses.create');
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'language' => 'required',
            'description' => 'required',
            'notes' => 'required',
        ]);
        $input = $request->all();
        $data = [
            'teacher_id' => auth()->user()->id,
            'name' => $input['title'],
            'price' => $input['price'],
            'lang' => $input['language'],
            'description' => $input['description'],
            'notes' => $input['notes'],
            'publish' => 1,
        ];
        Courses::create($data);
        return redirect()->route('tcourses')->with('success','Course created successfully!');
    }
}
