@extends('layout.layout')
@section('content')
    <form action="{{route('status.update', $status->id)}}" method="POST">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Atualizar status
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Nome <b style="color: red">*</b></label>
                            <input name="name" class="form-control" maxlength="45"
                                placeholder="Digite o nome do status" value="{{ $status->name }}" required>
                        </div>
                        <div class="form-group col-2 mb-3">
                            <label for="exampleInputColor">Cor</label>
                            <input name="color" class="form-control" value="{{ $status->color }}" type="color">
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-secondary" href="{{route('status.show')}}">Volar</a>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
