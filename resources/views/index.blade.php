@extends('templates.template')


@section('content')

<div>
    <h1>Cursos</h1>
</div>

<ul>
    <a href="/disciplinas"><li>Disciplinas</li></a>
    <a href="/professores"><li>Professores</li></a>
    <a href="/alunos"><li>Alunos</li></a>
</ul>

@foreach ($cursos as curso)
    <h1></h1>
@endforeach


@endsection

