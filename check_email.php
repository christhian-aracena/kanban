<?php
require 'Datos/conexion.php';

if (isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    $query = "SELECT COUNT(*) AS count FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $query);
    $data = mysqli_fetch_assoc($result);

    if ($data['count'] > 0) {
        echo json_encode(array('exists' => true));
    } else {
        echo json_encode(array('exists' => false));
    }
}
?>
