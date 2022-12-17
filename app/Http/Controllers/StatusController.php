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
        $status = Status::all();
        return view('forms.statusForm', compact('status'));
    }

    public function storeStatus(Request $request){

        $status = Status::create($request->all());

        if(!$status){
            return redirect()->back()->with('error', 'Algo deu errado!');
        }

        return redirect()->route('status.show')->with('success', 'Status cadastrado com sucesso!');

    }

    public function editStatus($id)
    {
        $status = Status::find($id);

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
