<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::with('clientes')->get();
        dd($messages);
        return view('message.message', compact('messages'));
    }

    public function create()
    {
        $clients = Clientes::all();
        return view('messages.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'message' => 'required|string',
        ]);

        Message::create($request->all());
        return redirect()->route('messages.index')->with('success', 'Mensagem criada com sucesso!');
    }

    public function edit(Message $message)
    {
        $clients = Clientes::all();
        return view('messages.edit', compact('message', 'clients'));
    }

    public function update(Request $request, Message $message)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'message' => 'required|string',
        ]);

        $message->update($request->all());
        return redirect()->route('messages.index')->with('success', 'Mensagem atualizada!');
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Mensagem deletada!');
    }
}
