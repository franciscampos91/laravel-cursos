<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\disciplinasController;
use App\Http\Controllers\cursosController;

Route::get('/', function () {
    return view('index');
});

route::get('/disciplinas', [disciplinasController::class, 'index']);

route::get('/cursos', [cursosController::class, 'index'])->name('cursos.index');;
route::get('/cursos/cadastrar', [cursosController::class, 'create']);
route::post('/cursos/gravar', [cursosController::class, 'store']);
route::delete('/cursos/deletar/{id}', [cursosController::class, 'destroy'])->name('cursos.destroy');;
route::get('/cursos/editar/{id}', [cursosController::class, 'edit'])->name('cursos.edit');
route::put('/cursos/editar/{id}', [cursosController::class, 'update']);

