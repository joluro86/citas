<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>@yield('titulo')</title>
    <style>
    .formulario{
        width:30%;
        margin: 0 auto;
    }

    </style>
</head>
<body>

    @yield('header')
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" href="{{route('usuario.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link"  href="{{route('usuario.create',1)}}">Crear cita</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link"  href="{{route('usuario.listaCitas')}}">Citas del dia</a>
                        </li>


                    </ul>
                    </div>
                </div>
        </nav>
        </div>


    @yield('contenido')

    @yield('footer')


</body>
</html>
