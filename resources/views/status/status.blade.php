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
                                <a  href={{ route('status.edit', $statu) }}
                                    class="btn btn-secondary float-end">Editar</a>

                            </div>
                        </div>

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
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data de cadastro</th>
                        <th>Detalhes</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    @include('forms.statusForm')

@endsection

@section('script')
    <script>
        $('#modal-status-cliente').on('show.bs.modal', function(event) {})
    </script>

