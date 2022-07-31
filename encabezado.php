<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
    <body>
    <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand" href="#">
                        <img src="img/zapateria.png" alt="" width="40" height="28" class="d-inline-block align-text-top">
                        El Buen Paso</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="venta.php">Venta de calzado</a></li>
                            <li class="nav-item"><a class="nav-link" href="registro.php">Alta de calzado</a></li>
                            <li class="nav-item"><a class="nav-link" href="empleado.php">Alta de empleado</a></li>
                            <li class="nav-item"><a class="nav-link" href="principal.php">Lista de calzado</a></li>
                            <li class="nav-item"><a class="nav-link" onclick="window.location.href='logout.php'">Cerrar Sesion</a></li>        
                        </u1>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
            </nav>

            <!-- Slide de imagenes -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
                        <div class="carousel-inner"> <!-- Contenedor interno -->
                            <div class="carousel-item active"> <!-- imagen 1 -->
                                <img src="img/foto1.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item"> <!-- imagen 2 -->
                                <img src="img/foto2.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item"> <!-- imagen 3 -->
                                <img src="img/foto3.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item"> <!-- imagen 4 -->
                                <img src="img/foto4.png" class="d-block w-100">
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

        </header>
    </body>
</html>