@extends('layout.layout')
@section('content')
    <div class="container-fluid ">
        <div class="card-header row">
            <h1 class="mt-4">Status</h1>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">{{ Breadcrumbs::render('status.show') }}</li>
        </ol>
    </div>
        <div class="col-xl-8" style="right: 200px">
            <button href="#" class="btn btn-primary ">Criar novo status</button>
        </div>
    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Visualização de status do cliente
        </div>
        <div class="card-body">
            <table id="datatable" class=" table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data de cadastro</th>
                        <th>Detalhes</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cpf ?? '-' }}</td>
                            <td>{{ $cliente->email ?? '-' }}</td>
                            <td>{{ $cliente->telefone ?? '-' }}</td>
                            <td> {{ \Carbon\Carbon::parse($cliente->created_at)->format('d/m/Y') }}</td>
                            <td><a class="btn btn-primary" type="button"
                                    href="{{ route('clientes.edit', $cliente->id) }}"><i
                                        class="fa-regular fa-pen-to-square"></i> Detalhes</a></td>
                            <td><a class="btn btn-danger" type="button" value="Excluir" data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-cliente"><i class="fa-solid fa-trash"></i> Excluir</a>
                        </tr>
                        @include('modal.alertaDeletar')
                    @empty
                    @endforelse --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
