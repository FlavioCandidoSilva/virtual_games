<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('user.users', compact('usuarios'));
    }

    public function deleteUser($id)
    {

        $usuarios = User::findOrFail($id);

        if (!$usuarios->delete()) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('usuarios.show')->with('success', 'Usuário desativado com sucesso!');
    }

    public function editUser($id){
        $usuarios = User::findOrFail($id);

        return view('forms.userEdit', compact('usuarios'));
    }


    public function inactiveUser(){

        $usuarios = User::onlyTrashed()->get();

        return view('user.usersInactive', compact('usuarios'));
    }

    public function restore($id)
    {
        $usuarios =  User::withTrashed()->findOrFail($id);

        if (!$usuarios->restore()) {
            return redirect()->back()->with('message', 'Erro ao restaurar esse usuário!');
        }


        return redirect()->route('usuarios.show')->with('success', 'Usuário ativado com sucesso!');
    }
}
