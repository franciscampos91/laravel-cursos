@extends('templates.template')

@section('content')

<div class="container">

    <h2 class="mt-5">Adicionar Novo Professor</h2>
    <form action="{{ route('professores.gravar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cpf">ID</label>
            <input type="text" class="form-control" id="idprofessor" name="idprofessor" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" required>
        </div>
        <div class="form-group">
            <label for="formacao">Formação</label>
            <input type="text" class="form-control" id="formacao" name="formacao" required>
        </div>
        <div class="form-group">
            <label for="contato">Contato</label>
            <input type="text" class="form-control" id="contato" name="contato" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</div>


@endsection