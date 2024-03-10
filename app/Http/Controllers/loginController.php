<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    public function index()
    {
        return view('login',[
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $cred = $request->validate([
            'username' => 'required|min:3',
            'password' => 'required'
        ]);

        if(Auth::attempt($cred))
        {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('loginErr', 'Login Gagal!!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
