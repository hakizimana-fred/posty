<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //sign in user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // sign in
        // auth()->attempt([
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]); // user or null
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');

        //redirect
    }
}
