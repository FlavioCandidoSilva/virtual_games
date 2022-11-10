@extends('welcome')

@section('content')
    <div class="container-fluid px-4 card mt-4 shadow">
        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" name="name" class="form-control"  placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Telefone</label>
                        <input type="telefone" name="telefone" class="form-control" placeholder="Telefone">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">CPF</label>
                        <input type="text" name="cpf" class="form-control" placeholder="CPF">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" name="endereco" class="form-control" placeholder="Endereço">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Descrição</label>
                    <textarea type="text" name="description" class="form-control"  placeholder="Observações"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
