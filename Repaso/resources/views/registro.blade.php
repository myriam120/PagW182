@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('contenido')
@if (session()->has('confirmacion'))
<script>
   Swal.fire({
    icon: 'success',
    title: 'El libro se registró correctamente',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif
<div class="container mt-5 col-md-6">

<h1 class="display-1 text-center text-danger mt-5"> Formulario </h1>




<form method="POST" action="/guardarlibro">
    @csrf

<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ISBN </label>
        <input type="text" name="txtISBN" class="form-control" value="{{old('txtISBN')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtISBN')}} </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo </label>
        <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}} </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Autor </label>
        <input type="text" name="txtAutor" class="form-control" value="{{old('txtAutor')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtAutor')}} </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Paginas </label>
        <input type="text" name="txtPaginas" class="form-control" value="{{old('txtPaginas')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtPaginas')}} </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Editorial </label>
        <input type="text" name="txtEditorial" class="form-control" value="{{old('txtEditorial')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtEditorial')}} </p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email de Editorial</label>
        <input type="text" name="txtEmail_de_editorial" class="form-control" value="{{old('txtEmail_de_editorial')}}" >
        <p class="text-danger fst-italic">{{$errors->first('txtEmail_de_editorial')}} </p>
    </div>
    <div class="card-footer text-body-secondary">
    <div class="d-grip grap-2">
  <button type="submit" class="btn btn-outline-primary">Guardar Libros</button>
</form>
  </div>
  <div class="card">
  <div class="card-header">
    Nombre  Biblioteca  Copyright  Dia  Mes Y Año
  </div>
</div>
</div> <!--div container-->


@endsection