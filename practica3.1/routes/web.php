<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php

Route::get('/tasks', function () {
    $tasks = [
        ['title' => 'Hacer las compras', 'completed' => true],
        ['title' => 'Hacer ejercicio', 'completed' => false],
        ['title' => 'Hacer la tarea', 'completed' => false],
    ];

    return view('tasks', ['tasks' => $tasks]);
});
