@extends('welcome')
@section('content')
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="card-header mt-4">
            <h2>Cadastro de cliente</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active ">{{ Breadcrumbs::render('clientesCreate') }}
                </li>
            </ol>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome <b style="color: red">*</b></label>
                    <input name="nome" class="form-control" maxlength="45" placeholder="Digite o nome completo" required>
                </div>

                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" class="form-control" placeholder="Digite o email">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input name="endereco" class="form-control" maxlength="45" placeholder="Digite o endereço">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Cpf </label>
                    <input name="cpf" id="cpf" class="form-control cpf" data-mask="000.000.000-00" maxlength="14" placeholder="Digite o cpf">
                </div>

                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Telefone </label>
                    <input name="telefone" id="telefone" placeholder="9999-9999"  data-mask="0000-0000" pattern="[0-9]{3,4}-[0-9]{4}" inputmode="text"
                        class="form-control" maxlength="9">
                </div>
                <div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Observações</label></label>
                        <textarea name="description" class="form-control textarea"></textarea>
                    </div>
                </div>

            </div>
            <div class="card-footer mt-2">
                <button type="submit" class="btn btn-primary">Salvar</button>

                <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </form>
@endsection
