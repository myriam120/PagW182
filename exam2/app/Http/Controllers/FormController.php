<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorForm;

class FormController extends Controller
{
    public function metodoFormulario(){

        return redirect('/formularioexam')->with('confirmacion', 'tu comic se a guardado');
    }
}
