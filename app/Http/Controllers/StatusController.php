<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function showStatus()
    {
        $status = Status::all();
        return view('status.status', compact('status'));
    }

    public function createStatus()
    {
        return view('forms.status');
    }

    public function storeStatus(Request $request){

        $clientes = Status::create($request->all());

        if(!$clientes){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('home')->with('success', 'Status cadastrado com sucesso!');

    }


    public function edit($id)
    {
        $status = Status::find($id);
        return view('status.edit', compact('status'));
    }

}
