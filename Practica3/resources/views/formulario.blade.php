
@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5"> FORMULARIOS </h1>

<div class="container mt-5 col-md-6">

<div class="card text-center">
  <div class="card-header text-primary fs-5 fw-semibold">
    Introduce tus recuerdos aqui..
  </div>
  <div class="card-body">
  <form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo: </label>
        <input type="text" class="form-control"
    </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo: </label>
    <input type="text" class="form-control">
  </div>

  </div>

  <div class="card-footer text-body-secondary">
    <div class="d-grip grap-2">
  <button type="submit" class="btn btn-outline-primary">Guardar Recuerdos</button>
</form>
  </div>
 </div> <!--div tarjeta-->

</div> <!--div container-->
@endsection