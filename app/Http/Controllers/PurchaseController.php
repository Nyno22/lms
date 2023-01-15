<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;

class PurchaseController extends Controller
{
    public function index()
    {
        //
    }
    public function store(Request $request)
    {
        //
        $request->validate([
            'course' => 'required',
            'user' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        $ret = $input['course'];
        $data = [
            'user_id' => auth()->user()->id,
            'course_id' => $input['course'],
            'status' => $input['status'],
        ];
        Purchases::create($data);
        return redirect()->route('steachercourse',$ret)->with('success','Course created successfully!');
    }
}
