@extends('templates.template')

@section('content')

<section class="container">

    <h1>Cursos Cadastrados</h1>


    <table>
        <tr>
            <th>ID</th>
            <th>Disciplina</th>
            <th>Carga Horária</th>
        </tr>
    </table>

    <h2>Lista de Disciplinas</h2>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->id_disciplina }} - {{ $curso->disciplina }} ({{ $curso->carga_horaria }})</li>
        @endforeach
    </ul>

</section>

@endsection