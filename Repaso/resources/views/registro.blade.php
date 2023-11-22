@extends('layouts.plantilla')

@section('titulo', 'Registro')

@section('contenido')
<h1 class="display-1 text-center text-danger mt-5"> Formulario </h1>
<div class="container mt-5 col-md-6">
    <div class="card text-center">
    @if(session()->has('confirmación'))
      <script>
          Swal.fire({
              icon: 'success',
              title: 'Confirmación',
              text: '{{ session('confirmación') }}',
          });
      </script>
      @endif

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
                <label for="exampleFormControlInput1" class="form-label">Email editorial:</label>
                <input type="text" name="txtEmail" class="form-control" value="{{old('txtEmail')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtEmail')}}</p>
              </div>
                <div class="col-auto">
                </div>

<div class="card-footer text-body-secondary">
    <button type="submit" class="btn btn-primary mb-3">Guardar Libro</button>
        </div>
      </form>
      <div class="card">
  <div class="card-header">
    Nombre  Biblioteca  Copyright  Dia  Mes Y Año
  </div>
</div>
</div>
</div>
@endsection
    
