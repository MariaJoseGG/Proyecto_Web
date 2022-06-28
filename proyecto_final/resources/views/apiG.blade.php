<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.plot.ly/plotly-2.11.1.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand font-monospace" href="{{ url('/') }}">
                    <img src="{{asset('img/grafico.png')}}" alt="Ícono de un gráfico" width="30" height="24" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>
    </header>

    <main>
        <center>
            <h1>EQUIPAMIENTO DE SALUD</h1>
            <p>
                En esta api se encuentran un listado de el equipamiento de salud
                en el departamento de Caldas. Un equipamiento de salud es un edificio
                o espacio destinado a la administración y a la prestación de servicios de salud.
            </p>
        </center>
        <div id="div1"></div>
        <br>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('codigos/api_chart.js') }}"></script>

</html>