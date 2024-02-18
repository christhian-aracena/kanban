<?php
require 'Datos/conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$password = $_POST['password'];

function generarPalabraAleatoria() {
    $platosChilenos = array(
        "Asado", "Pastel-de-choclo", "Empanada", "Cazuela", "Curanto", "Chorrillana", "Porotos-con-riendas", "Humitas", "Pebre", "Arrollado-huaso",
        "Sopaipillas", "Calzones-rotos", "Caldillo-de-congrio", "Pan-amasado", "Charquican", "Paila-marina", "Chapalele", "Curanto", "Pantrucas", "Tortilla-de-rescoldo",
        "Machas-a-la-parmesana", "Mariscal", "Mote-con-huesillo", "Palta-reina", "Papas-a-la-pobre", "Prietas", "Reineta-frita", "Piscola", "Bistec-a-lo-pobre", "Sopa-de-mariscos",
        "Cochayuyo", "Chupe-de-locos", "Humita-en-olla", "Cordero-al-palo", "Sopa-de-mondongo", "Longaniza", "Milcao", "Cazuela-de-ave", "Locos-con-mayonesa", "Tallarines-verdes",
        "Curanto-en-hoyo", "Arroz-con-pollo", "Asado-a-la-parrilla", "Carne-mechada", "Porotos-granados", "Ensalada-chilena", "Ceviche-de-reineta", "Dorados-de-pescado", "Tallarines-al-ajillo", "Sancocho",
        "Pantrucas", "Cazuela-de-vacuno", "Ternera-a-la-olla", "Sopa-de-pescado", "Leche-asada", "Bistec-a-lo-pobre", "Charquican-de-pollo", "Sopa-de-arroz", "Sopa-de-lentejas", "Carbonada",
        "Gazpacho-chileno", "Pastel-de-jaiba", "Pan-de-milcao", "Ensalada-a-la-chilena", "Bacalao-a-la-vizcaina", "Marraqueta", "Cazuela-de-pollo", "Curanto-en-olla", "Guatitas", "Chupe-de-jaiba",
        "Ceviche-de-pescado", "Estofado-de-pollo", "Asado-de-cordero", "Pastel-de-papa", "Pastel-de-choclo-con-carne", "Choripan", "Pichanga", "Costillar-de-cerdo", "Pescado-frito", "Curanto-en-horno",
        "Tomatican", "Cazuela-de-vacuno", "Estofado-de-carne", "Sopa-de-pollo", "Guiso-de-arroz", "Pastel-de-papa-con-pollo", "Bistec-a-lo-pobre", "Sopaipillas-pasadas", "Tortilla-de-papas", "Empanadas-de-queso",
        "Asado-al-palo", "Humitas-en-olla", "Paila-marina", "Pescado-al-horno", "Pastel-de-choclo-con-queso", "Carbonada", "Pastel-de-papa-con-carne", "Costillas-al-horno", "Pescado-al-vapor", "Charquican-de-pescado",
        "Guatitas-a-la-jardinera", "Porotos-granados-con-mazamorra", "Asado-a-la-olla", "Estofado-de-carne-con-papas", "Cazuela-de-pollo-con-arroz", "Chupe-de-locos", "Chupe-de-jaiba", "Chupe-de-mariscos", "Tallarines-al-pesto", "Tallarines-con-salsa-roja",
        "Pastel-de-papas", "Lomo-saltado", "Pescado-a-la-parmesana", "Ensalada-de-palta", "Sopa-de-ajiaco", "Choritos-a-la-chalaca", "Huesillos", "Sopa-de-garbanzos", "Ensalada-de-pallares", "Ensalada-de-choclo",
        "Cochayuyo-en-ensalada", "Pastel-de-jaiba", "Ensalada-de-quinoa", "Sopa-de-pescado", "Leche-nevada", "Ensalada-de-mariscos", "Manjarate", "Sopa-de-remolacha", "Pastel-de-leche", "Chacarero",
        "Completo", "Chaparritas", "Tacos-de-pescado", "Milanesa-a-la-napolitana", "Chupes", "Charquican-de-porotos", "Tallarines-con-pollo", "Sopa-de-porotos", "Estofado-de-porotos", "Empanada-de-pulpo"
    );
    

    $palabraAleatoria = $platosChilenos[array_rand($platosChilenos)];
    return $palabraAleatoria;
}

$id_usuario = $nombre . '-'.$apellido . '-'.generarPalabraAleatoria();



$query = "INSERT INTO usuarios (id_usuario, nombre, apellido, correo, contrasena) VALUES ('$id_usuario', '$nombre', '$apellido', '$correo', '$password')";

if(mysqli_query($conexion, $query)) {
    echo 'success';
} else {
    echo 'error';
}
?>
