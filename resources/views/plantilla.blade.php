<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Diario Laravel</title>
</head>

<body>

    <!--Barra de Navegación-->

    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Mi Diario Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link {{request()->routeIs('jom')?'text-primary fw-bold':'active'}}" aria-current="page" href="{{route('jom')}}">Home</a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{request()->routeIs('recuerdo.create')?'text-primary fw-bold':'active'}}" href="{{route('recuerdo.create')}}">Nuevo Recuerdo</a>
            </li>
            
            <li class="nav-item">
            <a class="nav-link {{request()->routeIs('recuerdo.index')?'text-primary fw-bold':'active'}}" href="{{route('recuerdo.index')}}">Consultar Recuerdos</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

    <!--Contenido-->
    @yield('contenido')

    <!--Pie de Pagina-->
    <div class="alert alert-info text-center" role="alert">
        Alfredo Madrigal Tercero.  2022 CopyRigh©
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    

</body>

</html>