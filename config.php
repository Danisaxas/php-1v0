<?php
// Configuración de la base de datos
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tarjetas_fake');

// Conectar a la base de datos
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Comprobar la conexión
if($conn === false){
    die("ERROR: No se pudo conectar. " . $conn->connect_error);
}
?>
