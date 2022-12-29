<div class="modal fade" id="modal-produtos-edit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="form-produtos-edit" action=" " method="get">
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
                                <input name="name" id="name" class="form-control" value=" " maxlength="45"
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
        </div>
    </div>
</div>
