<?php
require 'Datos/conexion.php';



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$gender_id = $_POST['gender'];

    $wordsFemale = array(
        "Alegre", "Amable", "Amorosa", "Armoniosa", "Aventurera", "Bella", "Bondadosa", "Brillante", "Cálida", "Cariñosa",
        "Cautivadora", "Cercana", "Creadora", "Creativa", "Decidida", "Delicada", "Dichosa", "Dispuesta", "Emprendedora", "Encantadora",
        "Entusiasta", "Esperanzada", "Espiritual", "Estudiosa", "Exitoso", "Fascinante", "Feliz", "Fiel", "Generosa", "Graciosa",
        "Hábil", "Heroica", "Honesta", "Íntegra", "Inteligente", "Intuitiva", "Leal", "Luminosa", "Motivada", "Optimista",
        "Organizada", "Pacífica", "Paciente", "Perseverante", "Plena", "Poderosa", "Positiva", "Prudente", "Radiante", "Responsable",
        "Romántica", "Sabia", "Sencilla", "Sensata", "Serena", "Servicial", "Sincera", "Sociable", "Soñadora", "Sospechosa",
        "Talentosa", "Tolerante", "Trabajadora", "Valiente", "Vibrante", "Visionaria", "Voluntariosa", "Ágil", "Altruista", "Analítica",
        "Atenta", "Auténtica", "Bella", "Bienvenida", "Brillante", "Capaz", "Compasiva", "Comprometida", "Confiada", "Consciente",
        "Constante", "Decidida", "Dedicada", "Delicada", "Detallista", "Diligente", "Dinámica", "Dulce", "Educada", "Eficaz",
        "Eficiente", "Elegante", "Empática", "Emprendedora", "Encantadora", "Enérgica", "Entusiasta", "Equilibrada", "Espontánea", "Estable",
        "Estudiosa", "Exitosa", "Exquisita", "Extraordinaria", "Fascinante", "Fiel", "Flexible", "Formidable", "Generosa", "Genial",
        "Graciosa", "Hábil", "Harmoniosa", "Heroica", "Honesta", "Humilde", "Iluminada", "Imaginativa", "Imparable", "Independiente",
        "Indomable", "Ingeniosa", "Inspiradora", "Íntegra", "Inteligente", "Intuitiva", "Invencible", "Irresistible", "Leal", "Líder",
        "Lumínica", "Luminosa", "Magnética", "Majestuosa", "Maravillosa", "Motivada", "Natural", "Noble", "Objetiva", "Optimista",
        "Organizada", "Paciente", "Pasional", "Persistente", "Perspicaz", "Plena", "Poderosa", "Positiva", "Pragmática", "Preciosa",
        "Próspera", "Prudente", "Radiante", "Racional", "Realista", "Reconocida", "Reflexiva", "Relajada", "Resiliente", "Resolutiva",
        "Responsable", "Romántica", "Sabia", "Satisfecha", "Sencilla", "Sensata", "Sensible", "Serena", "Servicial", "Sincera",
        "Sociable", "Solidaria", "Soñadora", "Sorprendente", "Talentosa", "Tenaz", "Tolerante", "Trabajadora", "Tranquila", "Triunfadora",
        "Valiente", "Vibrante", "Victoria", "Virtuosa", "Visionaria", "Vital", "Voluntariosa", "Ágil", "Altruista", "Analítica",
        "Apasionada", "Atenta", "Auténtica", "Bella", "Bienvenida", "Brillante", "Capaz", "Carismática", "Compasiva", "Comprometida",
        "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva",
        "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa",
        "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente",
        "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana",
        "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora",
        "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida",
        "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante", "Creativa",
        "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente", "Constante",
        "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada", "Consciente",
        "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida", "Confiada",
        "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva", "Comprometida",
        "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa", "Compasiva",
        "Comprometida", "Confiada", "Consciente", "Constante", "Creativa", "Cálida", "Cautivadora", "Cercana", "Coherente", "Comunicativa"
    );
     

    $wordsNoGender = array(
        "Asado", "Empanada", "Cazuela", "Curanto", "Chorrillana", "Porotos", "Humita", "Pebre", "Arrollado", "Sopaipilla",
        "Caldillo", "Pan-amasado", "Charquican", "Paila-marina", "Chapalele", "Pantruca", "Tortilla", "Mote", "Palta", "Papas",
        "Prieta", "Reineta", "Piscola", "Bistec", "Cochayuyo", "Humita", "Cordero", "Longaniza", "Milcao", "Locos",
        "Tallarines", "Asado", "Carne", "Ensalada", "Ceviche", "Sancocho", "Carbonada", "Gazpacho", "Bacalao", "Marraqueta",
        "Guatita", "Choripan", "Pichanga", "Costillar", "Tomatican", "Guiso", "Estofado", "Empanadas", "Sopa", "Chacarero",
        "Completo", "Chaparritas", "Tacos", "Milanesa", "Ensalada", "Leche", "Churro", "Chumbeque", "Choclo", "Quinua",
        "Camarón", "Jaiba", "Pulpo", "Calamares", "Ostiones", "Centolla", "Salmón", "Trucha", "Atún", "Jurel",
        "Sardinas", "Machas", "Langosta", "Erizos", "Piscosour", "Caña", "Chicha", "Vino", "Cervecita", "Terremoto",
        "Completito", "Bitoque", "Chorrillo", "Churro", "Tortilla", "Mote", "Reineta", "Porotos", "Chilena", "Marraqueta",
        "Palta", "Cordero", "Tallarines", "Arrollado", "Sopaipilla", "Chapalele", "Pantruca", "Prieta", "Ceviche", "Piscola",
        "Asado", "Empanada", "Cazuela", "Curanto", "Chorrillana", "Porotos", "Humita", "Pebre", "Arrollado", "Sopaipilla",
        "Caldillo", "Pan-amasado", "Charquican", "Paila-marina", "Chapalele", "Pantruca", "Tortilla", "Mote", "Palta", "Papas",
        "Prieta", "Reineta", "Piscola", "Bistec", "Cochayuyo", "Humita", "Cordero", "Longaniza", "Milcao",
        "Tallarines", "Asado", "Carne", "Ensalada", "Ceviche", "Sancocho", "Carbonada", "Gazpacho", "Bacalao", "Marraqueta",
        "Guatita", "Choripan", "Pichanga", "Costillar", "Tomatican", "Guiso", "Estofado", "Empanadas", "Sopa", "Chacarero",
        "Completo", "Chaparritas", "Tacos", "Milanesa", "Ensalada", "Leche", "Churro", "Chumbeque", "Choclo", "Quinua",
        "Camarón", "Jaiba", "Pulpo", "Calamares", "Ostiones", "Centolla", "Salmón", "Trucha", "Atún", "Jurel",
        "Sardinas", "Machas", "Langosta", "Erizos", "Piscosour", "Caña", "Chicha", "Vino", "Cervecita", "Terremoto",
        "Completito", "Bitoque", "Churro", "Tortilla", "Mote", "Reineta", "Porotos", "Chilena", "Marraqueta",
        "Palta", "Cordero", "Tallarines", "Arrollado", "Sopaipilla", "Chapalele", "Pantruca", "Prieta", "Ceviche", "Piscola"
        );
    

    $wordsMens = array(
        "Alegre", "Amable", "Amoroso", "Armonioso", "Aventurero", "Bello", "Bondadoso", "Brillante", "Cálido", "Cariñoso",
        "Cautivador", "Cercano", "Creador", "Creativo", "Decidido", "Delicado", "Dichoso", "Dispuesto", "Emprendedor", "Encantador",
        "Entusiasta", "Esperanzado", "Espiritual", "Estudioso", "Exitoso", "Fascinante", "Feliz", "Fiel", "Generoso", "Gracioso",
        "Hábil", "Heroico", "Honesto", "Íntegro", "Inteligente", "Intuitivo", "Leal", "Luminoso", "Motivado", "Optimista",
        "Organizado", "Pacífico", "Paciente", "Perseverante", "Pleno", "Poderoso", "Positivo", "Prudente", "Radiante", "Responsable",
        "Romántico", "Sabio", "Sencillo", "Sensato", "Sereno", "Servicial", "Sincero", "Sociable", "Soñador", "Talentoso",
        "Tolerante", "Trabajador", "Valiente", "Vibrante", "Visionario", "Voluntarioso", "Ágil", "Altruista", "Analítico", "Atento",
        "Auténtico", "Bello", "Bienvenido", "Brillante", "Capaz", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante",
        "Decidido", "Dedicado", "Delicado", "Detallista", "Diligente", "Dinámico", "Dulce", "Educado", "Eficaz", "Eficiente",
        "Elegante", "Empático", "Emprendedor", "Encantador", "Enérgico", "Entusiasta", "Equilibrado", "Espontáneo", "Estable", "Estudioso",
        "Exitoso", "Exquisito", "Extraordinario", "Fascinante", "Fiel", "Flexible", "Formidable", "Generoso", "Genial", "Gracioso",
        "Hábil", "Harmonioso", "Heroico", "Honesto", "Humilde", "Iluminado", "Imaginativo", "Imparable", "Independiente", "Indomable",
        "Ingenioso", "Inspirador", "Íntegro", "Inteligente", "Intuitivo", "Invencible", "Irresistible", "Leal", "Líder", "Lumínico",
        "Luminoso", "Magnético", "Majestuoso", "Maravilloso", "Motivado", "Natural", "Noble", "Objetivo", "Optimista", "Organizado",
        "Paciente", "Pasional", "Persistente", "Perspicaz", "Pleno", "Poderoso", "Positivo", "Pragmático", "Precioso", "Próspero",
        "Prudente", "Radiante", "Racional", "Realista", "Reconocido", "Reflexivo", "Relajado", "Resiliente", "Resolutivo", "Responsable",
        "Romántico", "Sabio", "Satisfecho", "Sencillo", "Sensato", "Sensible", "Sereno", "Servicial", "Sincero", "Sociable",
        "Solidario", "Soñador", "Sorprendente", "Talentoso", "Tenaz", "Tolerante", "Trabajador", "Tranquilo", "Triunfador", "Valiente",
        "Vibrante", "Victorioso", "Virtuoso", "Visionario", "Vital", "Voluntarioso", "Ágil", "Altruista", "Analítico", "Apasionado",
        "Atento", "Auténtico", "Bello", "Bienvenido", "Brillante", "Capaz", "Carismático", "Compasivo", "Comprometido", "Confiado",
        "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido",
        "Confiado", "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo",
        "Comprometido", "Confiado", "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo",
        "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente",
        "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano",
        "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante", "Creativo", "Cálido", "Cautivador",
        "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante", "Creativo", "Cálido",
        "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante", "Creativo",
        "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente", "Constante",
        "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado", "Consciente",
        "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido", "Confiado",
        "Consciente", "Constante", "Creativo", "Cálido", "Cautivador", "Cercano", "Coherente", "Comunicativo", "Compasivo", "Comprometido"
    );
    


function getGenderWord($gender) {
    global $wordsFemale, $wordsMens, $wordsNoGender;

    if ($gender == 1) {
        $palabraAleatoria = $wordsMens[array_rand($wordsMens)];
    } elseif ($gender == 2) {
        $palabraAleatoria = $wordsFemale[array_rand($wordsFemale)];
    } else {
        $palabraAleatoria = $wordsNoGender[array_rand($wordsNoGender)];
    }

    return $palabraAleatoria;
}

$id_usuario = $nombre . '-'.$apellido . '-'.getGenderWord($gender_id);
$id_user_format = strtolower($id_usuario);



$query = "INSERT INTO usuarios (id_usuario, nombre, apellido, correo, contrasena, gender_id) VALUES ('$id_user_format', '$nombre', '$apellido', '$correo', '$password', '$gender_id')";

if(mysqli_query($conexion, $query)) {
    echo 'success';
} else {
    echo 'error';
}
?>
