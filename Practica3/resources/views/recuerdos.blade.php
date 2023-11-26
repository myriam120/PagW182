@extends('layouts.plantilla')

@section('titulo', 'Recuerdos')

@section('contenido')



<h1 class="display-1 text-center text-danger mt-5"> RECUERDOS </h1>

<div class="container">

@foreach ($consulRecuerdos as $recuerdo)

    <div class="card w-75 mb-3 mt-5">
    <div class="card-body">
        <h5 class="card-title fw-semibold">{{$recuerdo->titulo}} </h5>
        <p class="card-text fst-italic">{{$recuerdo->fecha}}</p>
        <p class="card-text fst-lighter">{{$recuerdo->recuerdo}}</p>
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$recuerdo->id}}">
            Editar
        </button>
        <button href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarRecuerdo{{ $recuerdo->id }}">
            Eliminar
        </button>
    </div>
    </div>
    @include('partials.modal')

@endforeach

</div>


@endsection