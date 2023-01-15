<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $input = $request->all();
        $data = [
            'teacher_id' => auth()->user()->id,
            'name' => $input['name'],
            'email' => $input['email'],
            'message' => $input['message'],
        ];
        Contact::create($data);
        return redirect()->route('contact')->with('success','Course created successfully!');
    }
}
