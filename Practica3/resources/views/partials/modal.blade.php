<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editar{{$recuerdo->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar recuerdo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>{{-- cierra headar --}}

      <div class="modal-body">
        <form method="POST" action="/recuerdo/{{$recuerdo->id}}/confirm">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo: </label>
            <input type="text" name="txtTitulo" class="form-control" value="{{$recuerdo->titulo}}" >
            <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}} </p>
        </div>

        <div class="mb-3">
            <label class="form-label">Recuerdo: </label>
            <input type="text" name="txtRecuerdo" class="form-control" value="{{$recuerdo->recuerdo}}">
            <p class="text-danger fst-italic">{{$errors->first('txtRecuerdo')}} </p>
        </div>

        </div>

        <div class="card-footer text-body-secondary">
            
      </div>{{-- cierra body --}}

      <div class="modal-footer">
      <div class="d-grip grap-2">
        <button type="submit" class="btn btn-outline-primary">Guardar Recuerdos</button>
        </div>
        </form>
      </div>{{-- cierra fooder --}}

    </div>
  </div>
</div>

<!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="eliminarRecuerdo{{ $recuerdo->id }}" tabindex="-1" aria-labelledby="eliminarRecuerdoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarRecuerdoModalLabel">Eliminar recuerdo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que quieres eliminar este recuerdo?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('recuerdo.destroy', $recuerdo->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                </form>
            </div>
        </div>
    </div>
</div>
