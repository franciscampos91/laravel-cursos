@extends('templates.template')


@section('content')

<div class="container">

    <div class="menu__icon">

        <div class="box__icon">
            <a href="/cursos">    
                <div class="icon">
                    <i class="bi bi-globe2"></i>
                </div>
                <div class="label">
                    Cursos
                </div>
            </a>
        </div>
    
        <div class="box__icon">
            <a href="/alunos">    
                <div class="icon">
                    <i class="bi bi-person"></i>
                </div>
                <div class="label">
                    Alunos
                </div>
            </a>
        </div>
    
        <div class="box__icon">
            <a href="/professores">    
                <div class="icon">
                    <i class="bi bi-person-video3"></i>
                </div>
                <div class="label">
                    Professores
                </div>
            </a>
        </div>
        
        <div class="box__icon">
            <a href="/unidades">    
                <div class="icon">
                    <i class="bi bi-bank"></i>
                </div>
                <div class="label">
                    Unidades
                </div>
            </a>
        </div>

    </div>





</div>


@endsection

