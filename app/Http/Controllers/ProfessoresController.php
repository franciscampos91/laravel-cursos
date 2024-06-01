<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Professores;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professores = Professores::all();
        return view('professores.home',['professores'=>$professores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professores.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $professor = new Professores();

        $professor->idprofessor = $request->idprofessor;
        $professor->cpf = intval($request->cpf);
        $professor->nome = $request->nome;
        $professor->descricao = $request->descricao;
        $professor->endereco = $request->endereco;
        $professor->cidade = $request->cidade;
        $professor->formacao = $request->formacao;
        $professor->contato = $request->contato;
        $professor->email = $request->email;

        $professor->save();

        // Redirecione para alguma página com uma mensagem de sucesso
        return redirect()->route('professores.index')->with('success', 'Professor adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontre o professor pelo ID e delete
        $professor = Professores::find($id);

        if ($professor) {
            $professor->delete();
            return redirect()->route('professores.index')->with('success', 'Professor deletado com sucesso!');
        } else {
            return redirect()->route('professores.index')->with('error', 'Professor não encontrado!');
        }
    }
}
