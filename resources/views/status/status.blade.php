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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-status-cliente">Criar novo
            status</button>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12 container">
            <div class="card mb-4 d-flex">
                <div class="row bg-light">
                    @forelse($status as $statu)
                        <div class="card p-3 px-2 m-2" style="width: 18rem;">
                            <div
                                style=" background: {{ $statu->color }};  width: 260px;
                                height: 100px;">
                            </div>
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">{{ $statu->name }}
                                </h5>
                                <button name="{{ $statu->name }}" data-bs-target="#modal-status-edit" data-bs-toggle="modal"
                                    data-bs-url="{{ route('status.update', $statu) }}" color="{{ $statu->color }}"
                                    class="btn btn-secondary float-end"><i class="fa-regular fa-pen-to-square"></i>
                                    Editar</button>

                            </div>
                        </div>
                        @include('forms.editStatus')
                    @empty
                        <div class="col-xl-12 container">
                            <div class="card mb-4 d-flex">
                                <div class="row bg-light">
                                    <div class="text-center"><b>Não há status cadastrados</b></div>
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
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
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th>Detalhes</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->status->name ?? '-' }}</td>
                            <td><a class="btn btn-primary" type="button"
                                    href="{{ route('clientes.edit', $cliente->id) }}"><i
                                        class="fa-regular fa-pen-to-square"></i> Detalhes</a></td>
                            <td><a class="btn btn-danger" type="button" value="Excluir" data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-cliente"><i class="fa-solid fa-trash"></i> Excluir</a>
                        </tr>
                        @include('modal.alertaDeletar')
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @include('forms.statusForm')

@endsection

@section('script')
    <script>
        $('#modal-delete-cliente').on('show.bs.modal', function(event) {})


        $('#modal-status-edit').on('show.bs.modal', function(event) {
            let url = event.relatedTarget.getAttribute('data-bs-url')
            let name = event.relatedTarget.getAttribute('name');
            let color = event.relatedTarget.getAttribute('color');
            $('#name').attr('value', name);
            $('#color').attr('value', color);
            $('#form-status-edit').attr('action', url);
        })
    </script>
@endsection
