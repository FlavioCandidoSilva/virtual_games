<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Status;
use App\Models\Produtos;
use App\Models\ProdutoCliente;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
class ClientesController extends Controller
{

    public function index(Request $request)
    {

        $clientes =  Clientes::orderBy('created_at', 'DESC')->get();

        $data_cadastro = \DateTime::createFromFormat('d/m/Y', $request->get('data_cadastro'));


        return view('welcome', compact('clientes'));
    }

    public function formCreate()
    {

        $clientes = Clientes::all();
        $status = Status::all();
        $produtos = Produtos::all();

        return view('forms.clientesForm', compact('clientes', 'status', 'produtos'));
    }

    public function createClientes(Request $request)
    {
        if(db::table('clientes')->where('cpf', $request->input('cpf'))->count()){
            return redirect()->back()->with('error', 'CPF já cadastrado!');
        };


        if (!Clientes::create($request->all())->produtos()->sync($request->input('produtos'))) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function editClientes($id)
    {

        $clientes = Clientes::findOrFail($id);
        $status = Status::all();
        $produtos = Produtos::all();
        $pCliente   = ProdutoCliente::where('cliente_id', $id)->pluck('produto_id')->toArray();

        return view('forms.editClient', compact('clientes', 'status', 'produtos','pCliente'));
    }


    public function updateClientes(Request $request, $id)
    {

        $clientes = Clientes::findOrFail($id);
        $clientes->update($clientes->produtos()->sync($request->input('produtos')));

        if (!$clientes->update($request->all())) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }


        return redirect()->route('home')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function deleteClientes($id)
    {

        $clientes = Clientes::findOrFail($id);

        if (!$clientes->delete()) {
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Cliente deletado com sucesso!');
    }
}
