@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <!-- Encabezado. Es el mismo para cada vista -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="{{ asset('img/logoSES.png') }}" alt="Logo del SES" width="250">
                    </a>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Servicios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container w-100 bg-primary bg-opacity-75 border border-info text-center text-white">
                <p class="mx-4 my-4 fs-5">
                    <b>
                        TÍTULO DE LA SECCIÓN
                    </b>
                    <br>
                    Subtítulo
                </p>
            </div>
        </div>
    </header>

    <main>
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
    </main>
    
    <footer>
        <hr>
        <div class="text-center">
            <img class="img-fluid" src="{{ asset('img/logoSES.png') }}" alt="Logo del SES" width="250">
            <!-- Pie de página. Es el mismo para cada vista -->
            <p>Horario de visitas
                Hospitalización 11:00 a.m. – 5:00 p.m.<br>
                UCI-UCIN 11:00 a.m. – 3:00 p.m.<br>

                “Durante la emergencia por COVID 19,<br>
                debimos restringir los acompañantes y eliminar las visitas.”</p>
        </div>
    </footer>
</body>
</html>
@endsection