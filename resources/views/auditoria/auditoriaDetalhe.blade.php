@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">
                Detalhes da auditoria
            </h1>
        </div>
        <div class="mt-2">
            <a href="{{ route('auditoria.auditoria') }}" class="btn btn-secondary float-right mt-1"><i class="fa fa-arrow-circle-left"
                aria-hidden="true"></i> Voltar</a>
        </div>
        <div class="card mt-4">
            <div class="card-body p-0 table-responsive">
                <table class="table table-hover text-nowrap">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>
                                {{ $audit->id }}
                            </td>
                        </tr>
                        <tr>
                            <td>Usuário</td>
                            <td>
                                {{ $audit->user->email ?? '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>Evento</td>
                            <td>
                                {{ strtoupper($audit->event) }} - {{ $audit->auditable_type }}
                            </td>
                        </tr>
                        <tr>
                            <td>Auditado ID</td>
                            <td>
                                {{ $audit->auditable_id }}
                            </td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>
                                {{ $audit->url }}
                            </td>
                        </tr>
                        <tr>
                            <td>Endereço IP</td>
                            <td>
                                {{ $audit->ip_address }}
                            </td>
                        </tr>
                        <tr>
                            <td>User Agent</td>
                            <td>
                                {{ $audit->user_agent }}
                            </td>
                        </tr>
                        <tr>
                            <td>Query SQL</td>
                            <td>
                                {{ $audit->tags ?? '---' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="mt-4">
            <div class="row p-0">
                <div class="col-6 card">
                    <div class="card-header">
                        <h3 class="card-title">Inormações antigas</h3>
                    </div>
                    <div>
                        <div class="card-body">
                            @foreach (json_decode($audit->old_values) as $key => $auditOld)
                                <div class="row">
                                    <ul>
                                        <li>{{ $key }}: {{ $auditOld }}</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-6 card">
                    <div class="card-header">
                        <h3 class="card-title">Inormações novas</h3>
                    </div>
                    <div>
                        <div class="card-body">
                            @foreach (json_decode($audit->new_values) as $key => $auditNew)
                                <div class="row">
                                    <ul>
                                        <li>{{ $key }}: {{ $auditNew }}</li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
