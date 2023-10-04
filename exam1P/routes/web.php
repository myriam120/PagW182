<?php

use Illuminate\Support\Facades\Route;

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

// routes/web.php

use App\Http\Controllers\RedirectController;

Route::get('/redirect-to-welcome', [RedirectController::class, 'redirectToWelcome']);
Route::get('/redirect-to-vista1', [RedirectController::class, 'redirectToVista1']);
Route::view('/vista2', 'vista2')->name('apodovista2');
Route::view('/vista3', 'vista3')->name('apodovista3');


