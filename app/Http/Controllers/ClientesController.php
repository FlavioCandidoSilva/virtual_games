<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Status;
use App\Http\Requests\StorePostRequest;
class ClientesController extends Controller
{

    public function index(){

        $clientes =  Clientes::orderBy('created_at', 'DESC')->get();
        return view('welcome', compact('clientes'));
    }

    public function formCreate(){

        $clientes = Clientes::all();
        $status = Status::all();

        return view('forms.clientesForm', compact('clientes', 'status'));
    }

    public function createClientes(Request $request){


        $clientes = Clientes::create($request->all());

        if(!$clientes){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso!');

    }

    public function editClientes($id){

            $clientes = Clientes::findOrFail($id);
            $status = Status::all();

            return view('forms.editClient', compact('clientes', 'status'));

    }


    public function updateClientes(Request $request, $id){


            $clientes = Clientes::findOrFail($id);

            if(!$clientes->update($request->all())){

                return redirect()->back()->with('error', 'Algo deu errado!');
            }

            return redirect()->route('home')->with('success', 'Cliente atualizado com sucesso!');

    }

    public function deleteClientes($id){

        $clientes = Clientes::findOrFail($id);

        if(!$clientes->delete()){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Cliente deletado com sucesso!');

    }

}
