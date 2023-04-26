@extends('layout.layout')
@section('content')
    <form action="{{ route('usuarios.update', $usuarios->id) }}" method="POST">
        @csrf
        <div class="card-header mt-4">
            <h2>Editar usuário</h2>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">Nome </label>
                    <input name="name" class="form-control" maxlength="45" placeholder="Nome" required>
                </div>

                <div class="form-group mt-2 col-6">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mt-2 col-6">
                    <label for="exampleInputEmail1">Nova senha</label>
                    <input type="password" value="{{ old('password') }}" class="form-control" placeholder="Nova senha">
                </div>
                <div class="form-group mt-2 col-6">
                    <label for="exampleInputEmail1">Confirmar senha</label>
                    <input name="password" type="password" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Confirmar senha">
                </div>
            </div>
            <div class="card-footer mt-2">
                <button type="submit" class="btn btn-primary">Salvar</button>

                <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </form>
@endsection
