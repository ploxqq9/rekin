<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function userLoginView()
    {
        return view('userlogin');
    }
    public function admLoginView()
    {
        return view('admlogin');
    }
    public function admCreateView()
    {
        return view('admCreate');
    }
}