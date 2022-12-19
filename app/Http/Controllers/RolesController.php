<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        //'name' => $input['name'];
        //dd('fetch');
        return view('home');
    }
}
