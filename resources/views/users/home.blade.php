@extends('templates.template')

@section('content')

<div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <br>
    <a href="" class="btn btn-dark">Cadastrar</a>
    
    <h1>Lista de Usuários</h1>

    <table class="table">

        <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>E-Mail</th>
            <th>Ação</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td></td>
        </tr>
        @endforeach

    </table>

</div>


@endsection