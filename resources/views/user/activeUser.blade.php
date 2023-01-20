<div class="modal fade" id="modal-ativar-usuario" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <form id="form-modal-active-cliente" action="{{ route('usuarios.activate', $usuario->id) }}" method="post">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ativar usuario</h5>
                </div>
                <div class="modal-body">
                    Deseja reativar esse usuário ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>
