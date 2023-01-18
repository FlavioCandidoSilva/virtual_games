<div class="modal fade" id="modal-filtro" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Filtrar por</h5>
            </div>
            <form action="{{ route('home') }}" method="GET">
                <div class="modal-body">
                    <div class="row container m-3">
                        <div class="col-6">
                            <label for="data_inicio"><b>Data de inicio </b></label>
                            <input class="form-control" type="date" value="{{ request('data_inicio') }}" name="data_inicio">
                        </div>
                        <div class="col-6">
                            <label for="data_inicio"><b>Data fim </b></label>
                            <input class="form-control" type="date" value="{{ request('data_fim') }}" name="data_fim">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
