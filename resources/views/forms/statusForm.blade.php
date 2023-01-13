<div class="modal fade" id="modal-status-cliente" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="form-modal-status-cliente" action="{{ route('status.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Criar um novo status
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Nome <b style="color: red">*</b></label>
                            <input name="name" class="form-control" maxlength="45"
                                placeholder="Digite o nome do status" required>
                        </div>
                        <div class="form-group col-2 mb-3">
                            <label for="exampleInputColor">Cor</label>
                            <input name="color" class="form-control" value="#000000" type="color">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
</div>
