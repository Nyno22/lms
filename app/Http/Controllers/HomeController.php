<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == 1)
        {
            return redirect('admin/home');
        }else
        {
            return redirect('/');
        }
    }
}
