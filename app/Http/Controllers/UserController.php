<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login',[
            ""
        ]);
    }
    

    public function authenticate(Request $request)
    {
        $ValidData = $request->validate([
            'nama'=>'required',
            'password'=>'required'
        ]);

        if (Auth::attempt($ValidData)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->with('loginFail', 'Login Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
