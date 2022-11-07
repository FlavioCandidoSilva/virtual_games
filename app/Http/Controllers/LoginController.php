<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login()
    {
        return view('login.login');
    }

    public function createUser()
    {
        return view('register.register');
    }

    public function storeUser(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        return route('loginUser');
    }

    public function  autenticacao(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            session_start();
            $request->session()->regenerate();
            return route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Usuário e/ou senha invalido(s)',
        ]);
    }


    public function sair()
    {
        session_destroy();
        return route('login.index');
    }
}
