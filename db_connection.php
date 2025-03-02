// db_connection.php
<?php
$servername = "localhost"; // Cambiar si estás usando un host diferente
$username = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "tarjetas"; // Nombre de la base de datos, ahora "tarjetas"

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
