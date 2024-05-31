@extends('templates.template')

@section('content')

<div class="container">

    <form action="/cursos/gravar" method="POST">

        @csrf 

        <div class="row">

            <div class="col-md-3">
                <label for="idcurso" class="form-label">ID do Curso</label>
                <input type="text" id="idcurso" name="idcurso" class="form-control">
            </div>
        </div>

        <div class="row">

            <div class="col-md-3">
                <label for="curso" class="form-label">Nome do Curso</label>
                <input type="text" id="curso" name="curso" class="form-control">
            </div>
            
        </div>

        <div class="row">

            <div class="col-md-3">
                <label for="duracao" class="form-label">Duração (em meses)</label>
                <input type="number" id="duracao" name="duracao" class="form-control">
            </div>

        </div>

        <div class="row">

        <div class="col-md-3">
            <label for="modalidade" class="form-label">Modalidade</label>
            <select name="modalidade" id="modalidade" class="form-select">
                <option value="Presencial">Presencial</option>
                <option value="EaD">EaD</option>
                <option value="Híbrido">Híbrido</option>
            </select>
        </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-dark" type="submit">Salvar</button>
            </div>
        </div>

    </form>

</div>


@endsection