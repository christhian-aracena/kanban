<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("Datos/conexion.php");

$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];


$nombre_may = strtoupper(substr($nombre, 0, 1));


$apellido_may = strtoupper(substr($apellido, 0, 1));

?>