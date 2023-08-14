@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">Clientes</h1>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active ">{{ Breadcrumbs::render('home') }}</li>

        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Visualização de clientes
                <button class="btn btn-secondary float-end m-1" data-bs-toggle="modal" data-bs-target="#modal-filtro">
                    <i class="fa-solid fa-filter"></i> Filtrar
                </button>
                @if (request()->all() != null)
                    <a href="{{ route('home') }}" class="btn btn-danger float-end m-1">remover filtro </a>
                @endif
                @include('modal.modalFiltro')
                <a class="btn btn-primary float-end mt-1" href="{{ route('clientes.create') }}"><i
                        class="fa-solid fa-user-plus"></i> Novo
                    cliente</a>
            </div>
            <div class="card-body">
                <table id="datatable" class=" table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Status</th>
                            <th>Data de cadastro</th>
                            <th>Detalhes</th>
                            <th>Excluir</th>
                            <th>Termo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf ?? '-' }}</td>
                                <td>{{ $cliente->email ?? '-' }}</td>
                                <td>{{ $cliente->telefone ?? '-' }}</td>
                                <td>{{ $cliente->status->name ?? '-' }}</td>
                                <td> {{ \Carbon\Carbon::parse($cliente->created_at)->format('d/m/Y') }}</td>
                                <td><a class="btn btn-primary" type="button"
                                        href="{{ route('clientes.edit', $cliente->id) }}"><i
                                            class="fa-regular fa-pen-to-square"></i> Detalhes</a></td>
                                <td><a class="btn btn-danger" type="button" value="Excluir" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-cliente"><i class="fa-solid fa-trash"></i> Excluir</a>
                                <td><a class="btn btn-success" href="{{ route('home', ['gerar_pdf' => $cliente->id]) }}" target="_blank">Gerar Relatório</a></td>
                            </tr>
                            @include('modal.alertaDeletar')
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#modal-delete-cliente').on('show.bs.modal', function(event) {})
    </script>
@endsection
