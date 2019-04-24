<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $role = request()->is('customer') ? 'customer' : 'admin';

        return view('frontend.index', ['role' => $role]);
    }

    public function forgot()
    {
        $role = request()->is('customer/*') ? 'customer' : 'admin';

        return view('frontend.forgot', ['role' => $role]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $role = request()->is('customer') ? 'customer' : 'admin';

        if (auth()->guard($role)->attempt($request->except(['_token'])) === true) {
            setSuccessMessage('You are logged in.');
            session(['role' => $role]);

            return redirect()->route($role.'.dashboard');
        }

        setErrorMessage('Invalid credentials.');

        return redirect()->back();
    }

    public function logout()
    {
        $role = request()->is('customer/*') ? 'customer' : 'admin';

        auth()->guard($role)->logout();
        session()->forget(['user', 'role']);

        setSuccessMessage('You are logged out.');

        return redirect()->route($role.'.login');
    }
}
