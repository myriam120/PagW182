<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRegistro;

class NoticiaLiteraria extends Controller
{
    public function metodoPrincipal(){
        return view('welcome');

    }

    public function metodoRegistro(){
        return view('registro');

    }

    public function metodoLogin(){
        return view('Login');

    }
    
    public function metodoGuardar(validadorFormRegistro $req){
        return redirect('/registro')->with('confirmacion', 'tu libro a sido guardado');


        /*  $validated = $req->validate([
            'txtISBN' => 'required|max:13',
            'txtPaginas' => 'required|min:1',
            'txtEmail' => 'required|min:5'
        ]); */

        
/*        echo"<p>";
            echo $req->path();
            echo $req->method();
            echo $req->ip();
            echo $req->url();
        echo"</p>";*/
    }
}
