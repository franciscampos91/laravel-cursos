@extends('templates.template')

@section('content')




<div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <br>
    <a href="/cursos/cadastrar" class="btn btn-dark">Cadastrar</a>
    
    <h1>Lista de Cursos</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Curso</th>
            <th>Duração (meses)</th>
            <th>Modalidade</th>
            <th>Ação</th>
        </tr>


        @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->idcurso }}</td>
            <td>{{ $curso->curso }}</td>
            <td>{{ $curso->duracao }}</td>
            <td>{{ $curso->modalidade }}</td>
            <td>
                <form action="{{ route('cursos.destroy', $curso->idcurso) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
        
            </td>
        </tr>
        @endforeach

    </table>

</div>

@endsection