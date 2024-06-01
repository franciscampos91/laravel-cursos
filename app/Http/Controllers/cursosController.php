<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Cursos;


class cursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$cursos = DB::select('select * from cursos.curso');

        $cursos = Cursos::all();

        return view('cursos.home',['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      /*  // Valide os dados do formulário
        $validatedData = $request->validate([
            'idcurso' => 'required|int|max:11',
            'curso' => 'required|string|max:45',
            'duracao' => 'required|string|max:45',
        ]);*/

        $curso = new Cursos();

        $curso->idcurso = $request->idcurso;
        $curso->curso = $request->curso;
        $curso->duracao = $request->duracao;
        $curso->modalidade = $request->modalidade;

        $curso->save();


        return redirect()->route('cursos.index')->with('success', 'Curso criado com sucesso!');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $curso = Cursos::findOrFail($id);
        return view('cursos.visualizar',['curso'=>$curso]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $curso = Cursos::findOrFail($id);

       return view('cursos.editar',['curso'=>$curso]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $curso = Cursos::findOrFail($id);

        $curso->idcurso = $request->idcurso;
        $curso->curso = $request->curso;
        $curso->duracao = $request->duracao;
        $curso->modalidade = $request->modalidade;
        $curso->update();
        //Cursos::findOrFail($id)->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'Curso editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Cursos::findOrFail($id);
        $curso->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso excluído com sucesso!');

    }
}
