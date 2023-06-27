@extends('layouts.base')
@section('titulo', 'Escuela Deportiva')


@section('contenido')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="{{ asset('css/main.css')  }}" href="">
    <title>Document</title>
</head>

<body class="container justify-content-center" style="width: 90%; height: 3000px">
    <div>
        <section style="display: flex; background-color: lightgrey; width: auto; height: 300px;">
            <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 40px;">
                <h4 style="margin-top: 50px; margin-left: 30px;">Nuestra escuela tiene como misión formular, adoptar,
                    dirigir, coordinar y ejecutar la política pública, planes, programas y proyectos en materia del
                    deporte, la recreación, el aprovechamiento del tiempo libre, la actividad física, para promover el
                    bienestar y la calidad de vida.</h4>
            </div>
            <div class="container d-flex justify-content-center align-items-center" style="margin-bottom: 20px;">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner d-flex align-items-center">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/futbol-base.jpg')  }}" class="d-block w-100" alt="futbol"
                                style="width: 300px; height: 250px; margin-top: 20px; border-radius: 5px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ninos-jugando.jpg.jpeg')  }}" class="d-block w-100" alt="logo"
                                style="width: 300px; height: 250px; margin-top: 20px; border-radius: 5px;">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/futbol-ninos.jpg.jpeg')  }}" class="d-block w-100" alt="ninos"
                                style="width: 300px; height: 250px; margin-top: 20px; border-radius: 5px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="content2" style="width: 100%;">
                <h1 style="text-align: center; margin-top: 20px;">Nuestras Categorias</h1>
                <p style="text-align: center;">Manejamos diferentes categorias de futbol <br>Dependiendo de la edad del
                    estudiante se le ubicará en su respectiva categoria.
                </p>
            </div>
            <div class=" content3 d-flex justify-content-center align-items-center" style=" width: 100%">
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 90px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="text-align:center;"><b>Categoria 2002</b></h4>
                        <p style="text-align:center;">Dirigida por: <br>Ricardo Contreras<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="text-align:center;">@Ricardo_Con</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 90px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="text-align:center;"><b>Categoria 2004</b></h4>
                        <p style="text-align:center;">Dirigida por: <br>Andres Quintero<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="text-align:center;">@Andres_Quin</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 90px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="text-align:center;"><b>Categoria 2006</b></h4>
                        <p style="text-align:center;">Dirigida por: <br>Carlos Duarte<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="text-align:center;">@Carlitos_Du</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 90px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="text-align:center;"><b>Categoria 2008</b></h4>
                        <p style= "text-align:center;">Dirigida por: <br>Laura Villamizar<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="text-align:center;">@Laura_Vi</p>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
</body>

</html>
@endsection