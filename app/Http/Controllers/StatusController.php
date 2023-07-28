<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Clientes;

class StatusController extends Controller
{
    public function showStatus()
    {
        $status = Status::all();
        $clientes = Clientes::all();
        return view('status.status', compact('status', 'clientes'));
    }

    public function createStatus()
    {
        $status = Status::all();
        return view('forms.statusForm', compact('status'));
    }

    public function storeStatus(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:15',
        ]);


        if(!Status::create($request->all())){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('status.show')->with('success', 'Status cadastrado com sucesso!');

    }

    public function editStatus($id)
    {
        $status = Status::findOrFail($id);
        return view('forms.editStatus', compact('status'));
    }
    
    public function updateStatus(Request $request, $id)
    {
        $status = Status::findOrFail($id);

        if(!$status->update($request->all())){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }


        return redirect()->route('status.show')->with('success', 'Status atualizado com sucesso!');
    }

}
