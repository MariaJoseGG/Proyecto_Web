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
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="{{ asset('img/logoSES.png') }}" alt="SES" width="250">
                    </a>
                </div>
            </nav>
            <div class="container w-100 bg-primary bg-opacity-75 border border-info text-center text-white">
                <p class="mx-4 my-4 fs-5">
                    <b>
                        CONTROL HEMODINÁMICO
                    </b>
                    <br>
                    Administrar Pacientes
                </p>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid w-100 p-3">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="text-center p-3">
                    <img class="img-fluid" src="{{ asset('img/pacientes.png') }}" alt="Enfermera hablando con una niña" width="300">
                    <figcaption class="p-2">Administrar Pacientes</figcaption>
                </div>
            </a>
        </div>
        <div class="container text-center text-white">
            <div class="row">
                <div class="col">
                    <a href="{{route('paciente.create')}}" class="rounded-pill p-2 list-group-item list-group-item-action list-group-item" style="background-color: rgb(19, 166, 220);">Registrar nuevo paciente</a>
                </div>
                <div class="col">
                    <a href="#" class="rounded-pill p-2 list-group-item list-group-item-action list-group-item" style="background-color: rgb(19, 166, 220);">Ver los pacientes registrados</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <hr>
        <div class="text-center">
            <img class="img-fluid" src="{{ asset('img/logoSES.png') }}" alt="SES" width="250">
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