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
        <div class="container p-3">
            <form action="{{ route('paciente.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="tipoDoc" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de documento') }}</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="tipoDoc" id="tipoDoc">
                            <option value="1">Cédula de ciudadanía</option>
                            <option value="2">Tarjeta de identidad</option>
                            <option value="3">Registro civil</option>
                            <option value="4">Pasaporte</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="iden" class="col-md-4 col-form-label text-md-end">{{ __('Número de documento') }}</label>
                    <div class="col-md-6">
                        <input id="iden" type="text" class="form-control" name="iden" value="{{ old('iden') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre completo') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="entidad" class="col-md-4 col-form-label text-md-end">{{ __('Entidad') }}</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="entidad" id="entidad">
                            <option value="1">Salud Total</option>
                            <option value="2">Nueva EPS</option>
                            <option value="3">Sanitas</option>
                            <option value="4">Otra</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="edad" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>
                    <div class="col-md-6">
                        <input id="edad" type="number" class="form-control" name="edad" value="{{ old('edad') }}" placeholder="edad en años" onfocusout="validar()" required>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" id="boton" disabled>
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </div>
            </form>
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
<script src="{{ asset('codigos/verificar.js') }}"></script>

</html>
@endsection