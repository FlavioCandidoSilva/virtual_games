<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Http\Requests\StorePostRequest;

class ClientesController extends Controller
{

    public function showClientes(){

        $clientes =  Clientes::all();

        return view('welcome', compact('clientes'));
    }

    public function formCreate(){

        $clientes = Clientes::all();

        return view('forms.clientesForm', compact('clientes'));
    }

    public function createClientes(Request $request){

        $clientes = Clientes::create($request->all());

        if(!$clientes){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }



    }

}
