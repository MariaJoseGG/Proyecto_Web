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

        <div class="container w-75 pt-2">
            @include('flash-message')
        </div>

        <div class="container text-center text-white w-50 p-3">
            <div class="col">
                <a href="{{route('paciente.create')}}" class="rounded-pill p-2 list-group-item list-group-item-action list-group-item" style="background-color: rgb(19, 166, 220);">Registrar nuevo paciente</a>
            </div>
        </div>
        <div class="table-responsive p-4">
            <table class="table table-bordered border-primary text-center">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Entidad</th>
                        <th scope="col">Régimen de Seguridad Social</th>
                        <th scope="col">Tipo de afiliación</th>
                        <th scope="col">Cama</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Registrado por</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persona as $paciente)
                    <tr>
                        <td>{{$paciente->tipoDoc}}</td>
                        <td>{{$paciente->documento}}</td>
                        <td>{{$paciente->nombre}}</td>
                        <td>{{$paciente->sexo}}</td>
                        <td>{{$paciente->edad}}</td>
                        <td>{{$paciente->entidad}}</td>
                        <td>{{$paciente->regimen}}</td>
                        <td>{{$paciente->tipoAfiliacion}}</td>
                        <td>{{$paciente->cama}}</td>
                        <td>{{$paciente->fechaIngreso}}</td>

                        <td>{{DB::table('users')->where('id', $paciente->auxiliarId)->value('name');}}</td>

                        <td>

                            <a href="{{ route('paciente.edit',$paciente->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{route('paciente.destroy',$paciente ?? ''->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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