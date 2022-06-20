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
                    Pacientes
                </p>
            </div>
        </div>
    </header>

    <main>
        <form action="">
            
        </form>
    </main>


</body>
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

</html>
@endsection