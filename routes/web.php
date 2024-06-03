<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\disciplinasController;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');

route::get('/disciplinas', [disciplinasController::class, 'index']);

route::get('/cursos', [cursosController::class, 'index'])->name('cursos.index')->middleware('auth');
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


route::get('/login',[LoginController::Class, 'index'])->name('login');
route::post('/login/check', [LoginController::Class, 'check'])->name('login.check');
route::get('/logout', [LoginController::Class, 'logout'])->name('login.logout');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
