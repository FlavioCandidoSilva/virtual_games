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
                    <input name="email" value="{{ $clientes->email }}" type="email" class="form-control"
                        placeholder="Digite o email">
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Endereço</label>
                    <input name="endereco" value="{{ $clientes->endereco }}" class="form-control" maxlength="45"
                        placeholder="Digite o endereço">
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="form-group mt-2 col-2">
                            <label for="exampleInputEmail1">Cpf </label>
                            <input name="cpf" id="cpf" class="form-control cpf" data-mask="000.000.000-00"
                                maxlength="14" value="{{ $clientes->cpf }}" placeholder="000.000.000-00">
                        </div>
                        <div class="form-group mt-2 col-2">
                            <label for="exampleInputEmail1">Telefone </label>
                            <input name="telefone" id="telefone" placeholder="(99) 9999-9999" data-mask="(99) 9999-9999"
                                inputmode="text" value="{{ $clientes->telefone }}" class="form-control" maxlength="9">
                        </div>
                        <div class="form-group mt-2 col-2">
                            <label for="exampleInputEmail1">Data de entrega </label>
                            <input type="date" value="{{ $clientes->dataEntrega }}" class="form-control"
                                name="dataEntrega">
                        </div>
                        <div class="form-group mt-2 col-2">
                            <label for="exampleInputEmail1">Status do cliente</label>
                            <select name="status_id" class="form-control text-center select">
                                <option value=" ">Selecione um status</option>
                                @foreach ($status as $statu)
                                    <option value="{{ $statu->id }}"
                                        {{ $statu->id == $clientes->status_id ? 'selected' : '' }}>
                                        {{ $statu->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-2 col-3">
                            <label for="exampleInputProdutos">Selecione os produtos</label>
                            <div>
                                <select multiple="multiple" id="floatingSelect" name="produtos[]"
                                    class="select form-select">
                                    @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}"   @foreach($clientes->produtos as $clienteP){{$clienteP->pivot->produto_id == $produto->id ? 'selected': ''}}   @endforeach> {{ $produto->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="form-group mt-2">
                        <label for="exampleInputEmail1">Observações</label></label>
                        <textarea name="description" value="{{ $clientes->description }}" class="form-control textarea">{{ $clientes->description }}</textarea>
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
