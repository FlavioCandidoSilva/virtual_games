@extends('layout.layout')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Clientes</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active ">{{ Breadcrumbs::render('home') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Visualização de clientes
                <a class="btn btn-primary float-end" href="{{ route('clientes.create') }}">Novo
                    cliente</a>
            </div>
            <div class="card-body">
                <table id="datatable" class=" table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Produto</th>
                            <th>Data de cadastro</th>
                            <th>Detalhes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>
                                    {{ $cliente->produto}}
                                </td>
                                <td> {{  \Carbon\Carbon::parse($cliente->created_at)->format('d/m/Y') }}</td>
                                <td></td>
                            </tr>
                        @empty
                            <td>Nenhum cliente cadastrado</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
