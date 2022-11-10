<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Http\Requests\PostRequest;
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

            $user = User::firstOrCreate(['email' => $request->email], [
                'email' => $request->email,
                'name' => $request->name,
                'password' => $password
            ]);

            if ($user->wasRecentlyCreated) {
                toastr()->success('Usuário cadastrado com sucesso!');
                return redirect()->route('login.login');
            } else {
                toastr()->error('Erro, usuário já cadastrado!');
                return redirect()->route('register.register');
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

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorretos',
        ])->onlyInput('email');
    }

    public function sair()
    {
        Auth::logout();
        return redirect('/login');
    }
}
