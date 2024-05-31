<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\disciplinasController;

Route::get('/', function () {
    return view('index');
});

route::get('/disciplinas', [disciplinasController::class, 'index']);
