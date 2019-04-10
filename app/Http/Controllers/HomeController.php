<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function forgot()
    {
        return view('frontend.forgot');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
