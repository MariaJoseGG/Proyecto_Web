@extends('layouts.app')

@section('content')
<div class="container w-100 bg-primary bg-opacity-75 border border-info text-center text-white">
    <p class="mx-4 my-4 fs-5">
        <b>
            TÍTULO DE LA SECCIÓN
        </b>
        <br>
        Subtítulo
    </p>
</div>

@if( Auth::guest() )
<!-- Si no se ha iniciado sesión, muestra la vista normal -->
@else
<!-- Si es Auxiliar de enfermería -->
@if(Auth::user()->tipo_usuario === 0)
<div class="container pt-3 text-center w-25">
    <a href="{{ route('auxiliar.index') }}" class="rounded-pill p-2 list-group-item list-group-item-action list-group-item-success">Volver al Home</a>
</div>
@else
<!-- Si es un Administrador -->
<div class="container pt-3 text-center w-25">
    <a href="{{ route('home') }}" class="rounded-pill p-2 list-group-item list-group-item-action list-group-item-success">Volver al Home</a>
</div>
@endif
@endif

<div class="text-center p-3">
    <img class="img-fluid" src="{{ asset('img/hospital.jpg') }}" alt="Hospital Universitario de Caldas">
</div>
@endsection