@extends('templates.template')

@section('content')

<div class="container">

    <h1>{{ $curso->curso }}</h1>

    <h3>{{ $curso->duracao }} meses</h3>
    <h3>{{ $curso->modalidade }}</h3>

</div>

@endsection