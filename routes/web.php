<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\disciplinasController;
use App\Http\Controllers\cursosController;
use App\Http\Controllers\ProfessoresController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index')->middleware('auth');

Route::prefix('disciplinas')->middleware('auth')->group(function(){
    Route::get('/', [disciplinasController::class, 'index']);
});

Route::prefix('cursos')->middleware('auth')->group(function(){
    route::get('/', [cursosController::class, 'index'])->name('cursos.index');
    route::get('/cadastrar', [cursosController::class, 'create']);
    route::post('/gravar', [cursosController::class, 'store']);
    route::delete('/deletar/{id}', [cursosController::class, 'destroy'])->name('cursos.destroy');;
    route::get('/editar/{id}', [cursosController::class, 'edit'])->name('cursos.edit');
    route::put('/editar/{id}', [cursosController::class, 'update']);
    route::get('/visualizar/{id}', [cursosController::Class, 'show'])->name('cursos.show');

});


Route::prefix('professores')->middleware(['auth'])->group(function(){
    route::get('/',[professoresController::Class, 'index'])->name('professores.index');
    route::get('/cadastrar',[professoresController::Class, 'create'])->name('professores.create');
    route::post('/gravar', [professoresController::Class, 'store'])->name('professores.gravar');
    route::delete('/deletar/{id}', [professoresController::Class, 'destroy'])->name('professor.destroy');    
});


Route::prefix('login')->group(function(){
    route::get('/',[LoginController::Class, 'index'])->name('login');
    route::post('/check', [LoginController::Class, 'check'])->name('login.check');
    route::get('/logout', [LoginController::Class, 'logout'])->name('login.logout');
});

Route::prefix('users')->middleware('auth')->group(function(){
    route::get('/', [UserController::class, 'index'])->name('users');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
