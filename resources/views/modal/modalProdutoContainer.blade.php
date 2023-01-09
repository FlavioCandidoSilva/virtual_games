<form id="form-produtos-edit" action="{{ route('produtos.update', $produtos->id ) }}" method="get">
    @csrf
    <input type="hidden">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Atualizar produto
            </h5>
        </div>
        <div class="modal-body">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="exampleInputName">Nome <b style="color: red">*</b></label>
                    <input name="name" id="name" class="form-control" value="{{ $produtos->name }}" maxlength="45"
                        placeholder="Digite o nome do produto">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>
