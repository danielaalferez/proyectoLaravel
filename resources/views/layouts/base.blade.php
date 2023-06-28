<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('estilos')
    <title>Escuela Deportiva</title>
</head>

<body class="container justify-content-center" style="width: 90%;">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Mi App</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                        </li>

                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('projects.index') }}">Inscripciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pays.index') }}">Pagos</a>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                                <a class="nav-link" href="#"
                                    onclick="document.getElementById('logout-form').submit()">Salir</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Registrarse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row d-flex justify-content-center mt-3" style="background-color: lightgrey;">
            <div class="col-md-12">
                <h1 class="text-center text-dark">
                    @yield('titulo')
                </h1>
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-10 d-flex justify-content-start">
                @yield('botonera')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if (session('mensaje') && session('tipo'))
                    <div class="alert alert-{{ session('tipo') }} alert-dismissible fade show" role="alert">
                        {{ session('mensaje') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            @yield('contenido')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @yield('scripts')
    <footer style="margin-top: 50px; background-color: lightgrey; width: 100%; height: 50px; border-radius: 2px;">
            <h6 class="autor" style="line-height: 50px; height: 15px; margin-left: 40px;">Escuela Deportiva</h6>
            <h6 class="copy d-flex justify-content-center" style="line-height: 50px; height: 15px; margin-top: -25px;"> &#169; 2023</h6>
            <h6 class="autor" style="display: flex; justify-content: flex-end; margin-right: 60px; margin-top: -10px;">
                Santiago Bautista & Daniela Alferez</h6>
            
    </footer>
</body>

</html>
