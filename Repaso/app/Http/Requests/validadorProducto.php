<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    // ...

    public function validarProducto(Request $request)
    {
        // Define las reglas de validación para los campos del producto
        $reglas = [
            'nombre' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
        ];

        // Define mensajes personalizados para los errores
        $mensajes = [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'nombre.max' => 'El campo Nombre no puede tener más de :max caracteres.',
            'stock.required' => 'El campo Stock es obligatorio.',
            'stock.integer' => 'El campo Stock debe ser un número entero.',
            'stock.min' => 'El campo Stock debe ser igual o mayor que :min.',
        ];

        // Realiza la validación
        $validador = Validator::make($request->all(), $reglas, $mensajes);

        // Si la validación falla, redirige de vuelta con los errores
        if ($validador->fails()) {
            return redirect()->back()
                ->withErrors($validador)
                ->withInput();
        }

        // Si la validación es exitosa, continúa con la acción que desees realizar

        // Por ejemplo, para almacenar el producto en una matriz:
        $producto = [
            'nombre' => $request->input('nombre'),
            'stock' => $request->input('stock'),
        ];

        // Realiza alguna acción con el producto (por ejemplo, agregarlo a una matriz)

        return redirect('/productos')
            ->with('success', 'Producto creado con éxito');
    }

    // ...
}

