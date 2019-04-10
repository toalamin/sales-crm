<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function authenticate(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->except(['_token'])) === true) {
            $user = auth()->user();

            setSuccessMessage('You are logged in.');

            return redirect()->route('dashboard');
        }

        setErrorMessage('Invalid credentials.');

        return redirect()->back();
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }

    public function logout()
    {
        auth()->logout();

        setSuccessMessage('You are logged out.');

        return redirect()->route('login');
    }
}
