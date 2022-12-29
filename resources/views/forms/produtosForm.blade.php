<div class="modal fade" id="modal-produtos-cliente" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="form-modal-produtos-cliente" action="{{ route('produtos.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Criar um novo produto
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Nome <b style="color: red">*</b></label>
                                <input name="name" class="form-control" maxlength="45"
                                    placeholder="Digite o nome do produto" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
