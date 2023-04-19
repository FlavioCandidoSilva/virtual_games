@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">Usuários</h1>
        </div>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Visualização de usuários inativos

                <a class="btn btn-primary float-end mt-1" href="{{ route('usuarios.show') }}"><i class="fa-solid fa-user"></i>
                    Usuários ativos
                </a>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover text-nowrap datatable">
                    <thead>
                        <tr>
                            <th>
                                Nome
                            </th>
                            <th>
                                Login
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usuarios ?? '' as $usuario)
                            <tr>
                                <td>{{ ucfirst($usuario->name) }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    @if ($usuario->deleted_at == null)
                                        <span class="btn btn-success">Ativo</span>
                                    @else
                                        <span class="btn btn-danger">Inativo</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($usuario->deleted_at == null)
                                        <div class="float-right row">
                                            <div class="float-end row">
                                                <div>
                                                    <a type="button" href="{{ route('usuarios.edit', $usuario->id) }}"
                                                        class="btn btn-secondary"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i>
                                                        Editar
                                                    </a>

                                                    <button class="btn btn-danger mx-2" value="Excluir"
                                                        data-bs-toggle="modal" data-bs-target="#modal-delete-usuario"><i
                                                            class="fa fa-user-times" aria-hidden="true"></i>
                                                        Desativar</button>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="float-right row">
                                            <div>
                                                <button type="button" data-bs-target="#modal-ativar-usuario"
                                                    data-bs-toggle="modal" class="btn btn-success mx-2"><i
                                                        class="fa fa-user-plus" aria-hidden="true"></i>
                                                    Ativar</button>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                            @include('user.activeUser')
                            @include('user.alertaDeletarUser')
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum usuário encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
