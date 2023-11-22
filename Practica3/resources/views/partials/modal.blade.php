<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>{{-- cierra headar --}}

      <div class="modal-body">
        <form method="POST" action="#">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo: </label>
            <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}" >
            <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}} </p>
        </div>

        <div class="mb-3">
            <label class="form-label">Recuerdo: </label>
            <input type="text" name="txtRecuerdo" class="form-control" value="{{old('txtRecuerdo')}}">
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