@extends('layouts.plantilla')

@section('titulo', 'Recuerdos')

@section('contenido')

@include('partials.modal')

<h1 class="display-1 text-center text-danger mt-5"> RECUERDOS </h1>

<div class="container">

@foreach ($consulRecuerdos as $recuerdo)

    <div class="card w-75 mb-3 mt-5">
    <div class="card-body">
        <h5 class="card-title fw-semibold">{{$recuerdo->titulo}} </h5>
        <p class="card-text fst-italic">{{$recuerdo->fecha}}</p>
        <p class="card-text fst-lighter">{{$recuerdo->recuerdo}}</p>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar">
            Editar
        </button>
        <a href="#" class="btn btn-danger">Borrar</a>
    </div>
    </div>

@endforeach

</div>


@endsection