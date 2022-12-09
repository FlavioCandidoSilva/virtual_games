<div class="modal fade" id="modal-delete-cliente" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <form id="form-modal-delete-cliente" action="{{ route('clientes.delete', $cliente->id) }}" method="post">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir cliente</h5>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>
