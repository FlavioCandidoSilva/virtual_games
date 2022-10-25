<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function create()
    {
        return view('register.register');
    }


    public function showIndex()
    {
        return view('login.login');
    }


    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $password = bcrypt($request->password);


        if (!User::create(['name' => $request->name, 'email' => $request->email, 'password' => $password])) {
            return redirect()->route('register.register')->with('error', 'Usuário já cadastrado!');
        }

        return view('login.login');
    }

    public function autenticar(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return view('welcome');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorretos',
        ])->onlyInput('email');
    }

    public function sair()
    {
        session_destroy();
        return redirect()->route('login.index');
    }
}
