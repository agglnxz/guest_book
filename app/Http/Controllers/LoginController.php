<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function Loginproses(Request $request)
    {
        $this->validate($request, [
            'username' =>'required',
            'password' => '<PASSWORD>'
        ]);

        $username = $request->username;
        $password = $request->password;

        if ($username == 'admin' && $password == '<PASSWORD>') {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Username atau Password Salah');
        }
    }
}