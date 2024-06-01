@extends('templates.template')

@section('content')

<div class="container">

    <h1>Professores</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <br>

    <div class="row">
        <div class="col-md-2">
            <a href="{{ route('professores.create') }}"><button class="btn btn-dark">Cadastrar</button></a>
        </div>
    </div>

    <table Class="table">

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>FORMAÇÃO</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
            <th>AÇÃO</th>
        </tr>

        @foreach($professores as $professor)
        <tr>
            <td>{{ $professor->idprofessor }}</td>
            <td>{{ $professor->nome }}</td>
            <td>{{ $professor->formacao }}</td>
            <td>{{ $professor->email }}</td>
            <td>{{ $professor->contato }}</td>
            <td class="td__acao">
                <a href="" class="btn btn-primary">
                    <ion-icon name="eye-outline"></ion-icon>Visualizar
                </a>
                <a href="" class="btn btn-dark">
                    <ion-icon name="create-outline"></ion-icon>Editar
                </a>
                <form action="{{ route('professor.destroy', $professor->idprofessor) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> <ion-icon name="trash-outline"></ion-icon> Apagar</button>
                </form>
            </td>
        </tr>        
        @endforeach

    </table>

</div>

@endsection