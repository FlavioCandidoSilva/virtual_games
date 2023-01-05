<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use App\Models\Status;

class ProdutosController extends Controller
{
    public function showProdutos()
    {
        $produtos = Produtos::all();


        return view('produtos.produtos', compact('produtos'));
    }

    public function storeProdutos(Request $request){

        if(!Produtos::create($request->all())){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('produtos.show')->with('success', 'Produto cadastrado com sucesso!');

    }

    public function editProdutos($id)
    {
        $produtos = Produtos::findOrFail($id);
        return view('modal.modalProdutoContainer', compact('produtos'));
    }

    public function updateProdutos(Request $request, $id)
    {
        $produtos = Produtos::findOrFail($id);

        if(!$produtos->update($request->all())){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('produtos.show')->with('success', 'Produto atualizado com sucesso!');
    }

}
