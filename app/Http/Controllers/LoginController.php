<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function view_login()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' =>'required',
            'password' => 'required|min:5',
        ]);

        $username = $request->username;
        $password = $request->password;

        if (Auth::attempt(['name' => $username, 'password' => $password])) {

            return redirect('/dashboardAdmin');
        } else {
            return redirect('/')->withErrors('Username atau Password Salah');

        }
    }
}
