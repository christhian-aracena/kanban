<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Presentacion/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>

    <div class="sup">
        <header>
        <h1 class="no-seleccionar kanban">Sistema <span>Kanban</span></h1>

            <div class="contenedor-botones">
                <a href="login.php">Iniciar sesión</a>
                <a href="register.php">Registrarse</a>
            </div>
        </header>
    </div>
    <main>
        <div class="login-container">
            <h1>Regístrate</h1>
            <form id="register-form">
                <div class="form-group">
                    <label class="fuente" for="nombre">Nombre:</label>
                    <input class="a" type="text" id="nombre" name="nombre" placeholder="Ej: Juan" required>
                </div>
                <div class="form-group">
                    <label class="fuente" for="apellido">Apellido:</label>
                    <input class="a" type="text" id="apellido" name="apellido" placeholder="Ej: Pérez" required>
                </div>
                <div class="form-group">
                    <label class="fuente" for="correo">Correo:</label>
                    <input class="a" type="email" id="correo" name="correo" placeholder="Ej: jperez@soex.cl" required>
                </div>
                <div class="form-group">
                    <label class="fuente" for="password">Contraseña:</label>
                    <input class="a" type="password" id="password" name="password" placeholder="*******" required>
                </div>
                <div class="form-group">
                    <label class="fuente" for="repetir">Repite contraseña:</label>
                    <input class="a" type="password" id="repetir" name="repetir" placeholder="*******" required>
                </div>
                <div class="check">
                    <label class="fuente" for="mostrar-contrasenia">Mostrar contraseñas</label>
                    <input type="checkbox" id="mostrar-contrasenia" onclick="mostrarContrasenia()">
                </div>
                <button type="submit" class="register-container" id="btnregister">Crear cuenta</button>
            </form>
        </div>
    </main>
    <div class="inf">
        <footer>
            <small>&copy;Soporte Soex 2024. Todos los derechos reservados.</small>
        </footer>
    </div>
    <!-- Modal dinámico -->
    <div id="custom-modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close-modal">&times;</span>
            <p id="modal-message"></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="registrar.js"></script>
    <script src="Negocio/js/validaciones.js"></script>
</body>

</html>
