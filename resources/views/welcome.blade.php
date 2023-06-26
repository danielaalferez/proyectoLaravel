@include("layouts.base")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="{{ asset('css/main.css')  }}" href="">
    <title>Document</title>
</head>

<body class="container justify-content-center" style="width: 90%;" ;>
    <div>
        <header>
            <h1>Escuela Deportiva</h1>
        </header>
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
            <div class="content2">
                <h1 style="text-align: center;">Nuestras Categorias</h1>
                <p style="text-align: center;">Manejamos diferentes categorias de futbol <br>Dependiendo de la edad del
                    estudiante se le ubicará en su respectiva categoria.
                </p>
            </div>
            <div class=" content3" style="margin-top: 30px; margin-left: -35px;">
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 50px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="margin-left: 10px;"><b>Categoria 2002</b></h4>
                        <p>Dirigida por: <br>Ricardo Contreras<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="margin-top: -10px;">@Ricardo_Con</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 50px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="margin-left: 10px;"><b>Categoria 2004</b></h4>
                        <p>Dirigida por: <br>Andres Quintero<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="margin-top: -10px;">@Andres_Quin</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 50px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="margin-left: 10px;"><b>Categoria 2006</b></h4>
                        <p>Dirigida por: <br>Carlos Duarte<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="margin-top: -10px;">@Carlitos_Du</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('img/ciconfut.jpg')  }}" alt="avatar"
                        style=" margin-left: 50px; margin-top: 10px; width: 100px;">
                    <div class="contenido">
                        <h4 style="margin-left: 10px;"><b>Categoria 2008</b></h4>
                        <p>Dirigida por: <br>Laura Villamizar<br>Especialista en Educación Física y Recreación.</p>
                        <p class="p2" style="margin-top: -10px;">@Laura_Vi</p>
                    </div>
                </div>
            </div>
        </section>
        <footer style="margin-top: 50px; background-color: lightgrey; width: 100%; height: 50px; border-radius: 2px;">
            <h6 class="autor" style="line-height: 50px; height: 15px; margin-left: 40px;">Escuela Deportiva</h6>
            <h6 class="copy" style="display: flex; justify-content: flex-end; margin-right: 60px; margin-top: -5px;">
                &#169; 2023 Derechos reservados</h6>
        </footer>
    </div>
</body>

</html>