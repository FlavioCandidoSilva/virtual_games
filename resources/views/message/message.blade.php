@extends('layout.layout')
@section('content')
    <div class="container">
        <h1>Mensagens</h1>
        <a href="{{ route('messages.create') }}" class="btn btn-primary">Nova Mensagem</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Mensagem</th>
                    <th>Link WhatsApp</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->client->name }}</td>
                        <td>{{ $message->message }}</td>
                        <td>
                            <a href="https://wa.me/{{ $message->client->phone }}?text={{ urlencode($message->message) }}" 
                               target="_blank" class="btn btn-success">Enviar</a>
                        </td>
                        <td>
                            <a href="{{ route('messages.edit', $message) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('messages.destroy', $message) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection