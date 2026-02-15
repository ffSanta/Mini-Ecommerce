<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(Request $request){
        $data = $request->validate([
            'email'=>'required|email|string',
            'password'=>'required|string',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/products/category');
        }
        return back()->withErrors([
            'err' => 'email or password is not correct',
        ])->onlyInput('err');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/products');
    }
}
