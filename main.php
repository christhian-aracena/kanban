<?php
session_start();
$id = $_SESSION['id_app'];

include("Negocio/get-iniciales.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Presentacion/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/58b7154440.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>

    <div class="sup">
        <header id="banner">

            <a class="kanb" href="main.php">
                <h1>Kanban</h1>
            </a>

            <div class="contenedor-botones">
                <a href="Dashboard">Dashboard</a>
                <a href="create.php">Comenzar</a>
                <a href="#">Mis proyectos</a>
                <div class="perfil contenedor-botones">
                    <p><?php echo $nombre_may . " " . $apellido_may ?></p>
                </div>

            </div>



        </header>


    </div>
    <main>


        <div class="contenedor-lienzo">

            <div class="contenedor-backlog">
                <div class="titulo-backlog">
                    <h3>Backlog <i class="fa-solid fa-layer-group"></i></h3>
                </div>
                <div class="cuerpo-backlog">
                    <div class="contenedor-tarea">
                        <div class="titulo-perfil">
                            <h4>Titulo tarea</h4>
                            <div class="perfil">
                                <p><?php echo $nombre_may . " " . $apellido_may ?></p>
                            </div>
                            
                        </div>

                        <div class="contenedor-descripcion">
                            <p>lorem</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="contenedor-pendiente">
                <div class="titulo-pendiente">
                    <h3>Pendiente <i class="fa-solid fa-arrow-right"></i></h3>
                </div>
                <div class="cuerpo-pendiente">
                    <p>texto pendiente</p>
                </div>
            </div>

            <div class="contenedor-haciendo">
                <div class="titulo-haciendo">
                    <h3>Haciendo <i class="fa-solid fa-arrow-right"></i></h3>
                </div>
                <div class="cuerpo-haciendo">
                    <p>texto haciendo</p>
                </div>
            </div>

            <div class="contenedor-hecho">
                <div class="titulo-hecho">
                    <h3>Hecho <i class="fa-solid fa-check"></i></h3>
                </div>
                <div class="cuerpo-hecho">
                    <p>Texto hecho</p>
                </div>
            </div>

        </div>

    </main>

    <div class="inf">
        <footer>
            <small>&copy;Soporte Soex 2024. Todos los derechos reservados.</small>
        </footer>
    </div>
    <script src="loguear.js"></script>
    <script src="Negocio/js/validaciones.js"></script>

</body>

</html>