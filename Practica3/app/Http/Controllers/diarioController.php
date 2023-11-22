<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorFormDiario;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');

    }

    public function metodoFormulario(){
        return view('formulario');

    }

    public function metodoRecuerdo(){
        return view('recuerdos');


    }
    public function metodoGuardar(validadorFormDiario $req){
        return redirect('/formulario')->with('confirmacion', 'tu recuerdo llego al controlador');
        

      /*    $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:5',
        ]);*/  

        
/*        echo"<p>";
            echo $req->path();
            echo $req->method();
            echo $req->ip();
            echo $req->url();
        echo"</p>";*/
    }
}
