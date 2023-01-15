<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    
    public function index()
    {
        $t_id = auth()->user()->id;
        $info = User::where([['id', '=', $t_id]])->get();

        return view('teachers.profile.index', compact('info'));
    }

    public function edit($id)
    {
        $info = User::findOrFail($id);

        //dd($info);
        
        return view('teachers.profile.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'about' => 'required',
        ]);
        $input = $request->all();
        $data = [
            'name' => $input['name'],
            'number' => $input['number'],
            'gender' => $input['gender'],
            'email' => $input['email'],
            'about' => $input['about'],
        ];
        User::whereId($id)->update($data);
        return redirect()->route('tprofile')->with('success','Profile updated successfully!');
    }
}
