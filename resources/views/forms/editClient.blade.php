@extends('layout.layout')

@section('content')
    <div class="card-header mt-4">
        <h2>Atualizar cliente</h2>
    </div>
    <form action="{{ route('clientes.update', $clientes->id) }}" method="POST">
        @csrf
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome <b style="color: red">*</b></label>
                    <input name="nome " value="{{ $clientes->nome }}" class="form-control" maxlength="45"
                        placeholder="Digite o nome completo" required>
                </div>

                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" value="{{ $clientes->email }}" type="email" class="form-control" placeholder="Digite o email">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input name="endereco" value="{{ $clientes->endereco }}" class="form-control" maxlength="45"
                        placeholder="Digite o endereço">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Cpf </label>
                    <input name="cpf" class="form-control" value="{{ $clientes->cpf }}"  data-mask="000.000.000-00" placeholder="000.000.000-00" maxlength="14"
                       >
                </div>

                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Telefone </label>
                    <input name="telefone" value="{{ $clientes->telefone }}" placeholder="9999-9999"  data-mask="0000-0000" pattern="[0-9]{3,4}-[0-9]{4}" class="form-control " maxlength="9"
                        placeholder="Digite o telefone">
                </div>

                <div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Observações</label></label>
                        <textarea name="description" value="{{ $clientes->description }}" class="form-control textarea" maxlength="14">{{ $clientes->description }}</textarea>
                    </div>
                </div>

                <!-- /.card-body -->

            </div>
            <div class="card-footer mt-2">
                <button type="submit" class="btn btn-primary">Salvar</button>

                <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </form>
@endsection
