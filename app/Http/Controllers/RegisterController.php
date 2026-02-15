<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
    return view('auth.register');
}
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:8',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $role = $request->name === 'admin' ? 'admin' : 'user';
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role
        ]);
        Auth::login($user);
        return redirect('/products/category');
    }
}
