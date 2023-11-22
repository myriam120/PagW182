@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
    <ul>
        @foreach($productos as $producto)
            <li>
                {{ $producto['nombre'] }} (Stock: {{ $producto['stock'] }})
                <a href="{{ route('productos.edit', $producto['id']) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
