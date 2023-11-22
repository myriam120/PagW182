<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index()
    {
        // Lógica para mostrar una lista de órdenes de compra desde una fuente de datos (por ejemplo, una base de datos)
        return view('ordenes-compra.index');
    }

    public function crear()
    {
        return view('ordenes-compra.crear');
    }

    public function guardar(Request $request)
    {
        // Lógica para validar y guardar una nueva orden de compra
        return redirect()->route('ordenes-compra.index')->with('success', 'Orden de compra creada con éxito');
    }

    public function mostrar($id)
    {
        // Lógica para mostrar los detalles de una orden de compra específica
        return view('ordenes-compra.mostrar', ['id' => $id]);
    }
}
