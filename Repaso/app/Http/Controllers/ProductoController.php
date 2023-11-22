<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorProducto;

class ProductoController extends Controller
{
    private $productos = [
        ['id' => 1, 'nombre' => 'Producto 1', 'stock' => 10],
        ['id' => 2, 'nombre' => 'Producto 2', 'stock' => 5],
        // Agrega más productos aquí
    ];

    public function index()
    {
        return view('productos_index', ['productos' => $this->productos]);
    }

    public function edit($id)
    {
        $producto = collect($this->productos)->firstWhere('id', $id);

        return view('productos_edit', ['producto' => $producto]);
    }

    public function update(Request $request, $id)
    {
        $producto = collect($this->productos)->firstWhere('id', $id);

        $producto['stock'] = $request->input('stock');

        return redirect('/productos');
    }
}
