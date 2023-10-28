<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaLiteraria;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', [NoticiaLiteraria::class, 'metodoPrincipal'])->name('apodoPrincipal');
Route::get('/registro', [NoticiaLiteraria::class, 'metodoRegistro'])->name('apodoRegistro');
Route::post('/guardarlibro', [NoticiaLiteraria::class, 'metodoguardarlibro'])->name('guardarlibro');