<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');

    }

    public function metodoFormulario(){
        return view('formulario');

    }

    public function metodoRecuerdo(){
        return vier('recuerdos');


    }
    public function metodoGuardar(Request $req){
        return 'Se esta procesando  tu recuerdo..';
    }
}
