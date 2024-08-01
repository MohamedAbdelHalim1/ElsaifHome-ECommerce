<?php

namespace App\Http\Controllers\Auth\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StuffAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.backend.stuff-login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('stuff')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::guard('stuff')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    
}