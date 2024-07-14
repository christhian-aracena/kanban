<?php
$nombreServidor = "localhost";
$nombreUsuario = "christhian@localhost"; 
$contrasenia = "";
$nombreBD = "rescatam_kanban";



$conexion = new mysqli($nombreServidor, $nombreUsuario, $contrasenia, $nombreBD);

// Manejar los errores de conexión
if($conexion->connect_errno){
    echo "<div class='alert alert-danger alerta-registrado' role='alert'>
                No se pudo conectar a la base de datos!
              </div>" . $conexion->connect_error;
    exit();
}
// Configurar la codificación de caracteres
$conexion->set_charset("utf8");
?>
