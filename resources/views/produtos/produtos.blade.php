@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card-header row">
            <h1 class="mt-4">Produtos</h1>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active ">{{ Breadcrumbs::render('produtos.show') }}</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Visualização de produtos
                <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal-produtos-cliente"><i
                        class="fa-solid fa-plus"></i> Novo
                    produto</button>
            </div>
            <div class="card-body">
                <table id="datatable" class=" table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->name }}</td>
                                <td><a class="btn btn-secondary" type="button" data-bs-toggle="modal"
                                        data-url="{{ route('produtos.edit', $produto->id) }}"
                                        name="{{ $produto->name }}" data-bs-target="#modal-produtos-edit"><i
                                            class="fa-regular fa-pen-to-square"></i>
                                        Editar</a></td>
                            </tr>

                            @include('forms.produtosEdit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('forms.produtosForm')
@endsection

@section('script')
    <script>
        $('#modal-produtos-edit').on('show.bs.modal', function(event) {
            let url = event.relatedTarget.getAttribute('data-url')
            const modalBody = document.querySelector('#produtoContainer');
            let conteudo = fetch(url).then((res) => {
                return res.text();
            }).then((html) => {
                modalBody.innerHTML = html;
            }).catch((err) => console.log('Erro ao obter formulário do modal: ', err));
        })
    </script>
@endsection
