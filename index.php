<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SES</title>
    <link rel="icon" href="favicon.png">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- Encabezado. Es el mismo para cada vista -->
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img class="img-fluid" src="logoSES.png" alt="SES" width="250">
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
        <!-- Contenido de la vista -->
    </main>

    <footer>
        
        <!-- Pie de página. Es el mismo para cada vista -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<footer>
    <img class="img-fluid" src="logoSES.png" alt="SES" width="250">
    <!-- Pie de página. Es el mismo para cada vista -->
    <p>Horario de visitas
        Hospitalización 11:00 a.m. – 5:00 p.m.<br>
        UCI-UCIN 11:00 a.m. – 3:00 p.m.<br>
        
        “Durante la emergencia por COVID 19,<br>
         debimos restringir los acompañantes y eliminar las visitas.”</p>
</footer>

</html>