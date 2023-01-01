<div class="modal fade" id="modal-status-edit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="form-status-edit" action=" " method="get">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Atualizar status
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Nome <b style="color: red">*</b></label>
                            <input name="name" id="name" value=" " class="form-control" maxlength="45"
                                placeholder="Digite o nome do status">
                        </div>
                        <div class="form-group col-2 mb-3">
                            <label for="exampleInputColor">Cor</label>
                            <input name="color" class="form-control" id="color" value=" " type="color">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
