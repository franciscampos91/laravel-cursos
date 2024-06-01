<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\disciplinasController;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\ProfessoresController;

Route::get('/', function () {
    return view('index');
});

route::get('/disciplinas', [disciplinasController::class, 'index']);

route::get('/cursos', [cursosController::class, 'index'])->name('cursos.index');
route::get('/cursos/cadastrar', [cursosController::class, 'create']);
route::post('/cursos/gravar', [cursosController::class, 'store']);
route::delete('/cursos/deletar/{id}', [cursosController::class, 'destroy'])->name('cursos.destroy');;
route::get('/cursos/editar/{id}', [cursosController::class, 'edit'])->name('cursos.edit');
route::put('/cursos/editar/{id}', [cursosController::class, 'update']);
route::get('/cursos/visualizar/{id}', [cursosController::Class, 'show'])->name('cursos.show');


route::get('/professores',[professoresController::Class, 'index'])->name('professores.index');
route::get('/professores/cadastrar',[professoresController::Class, 'create'])->name('professores.create');
route::post('/professores/gravar', [professoresController::Class, 'store'])->name('professores.gravar');
route::delete('/professores/deletar/{id}', [professoresController::Class, 'destroy'])->name('professor.destroy');

