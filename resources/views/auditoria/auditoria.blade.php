@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">Auditoria</h1>
        </div>
        <ol class="breadcrumb mb-4">
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Visualização de auditoria
            </div>
            <div class="card-body table-responsive ">
                <table id="datatable" class=" table table-striped">
                    <thead>
                        <tr>
                            <th>ID auditoria</th>
                            <th>ID usuário</th>
                            <th>Login usuário</th>
                            <th>Evento</th>
                            <th>Data/hora</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($audit ?? '' as $audits)
                            <tr>
                                <td>{{ $audits->id }}</td>
                                <td>{{ $audits->user_id }}</td>
                                <td>{{ $audits->user->email ?? '-' }}</td>
                                <td>{{ strtoupper($audits->event) }} - {{ $audits->user_type }}</td>
                                <td>{{ (new DateTime($audits->created_at))->format('d-m-Y H:i:s') }}</td>
                                <td class="text-right">
                                    <a class="btn btn-secondary btn-sm"
                                        href="{{ route('auditoria.detalhes', $audits->id) }}">
                                        <i class="fa fa-user-circle" aria-hidden="true"> Detalhes </i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
