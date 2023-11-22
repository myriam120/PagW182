@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('productos.update', $producto['id']) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" id="stock" value="{{ $producto['stock'] }}">
        </div>
        <button type="submit">Guardar Cambios</button>
    </form>
    <a href="{{ route('productos.index') }}">Volver a la lista de productos</a>
@endsection
