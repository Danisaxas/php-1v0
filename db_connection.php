// db_connection.php
<?php
// Datos de conexión a PostgreSQL
$host = "dpg-cv26o0tsvqrc738skuj0-a"; // El hostname proporcionado por tu servicio
$port = "5432"; // Puerto de PostgreSQL, generalmente es 5432
$dbname = "tarjetas"; // Nombre de la base de datos
$user = "postgres"; // Usuario de PostgreSQL, usualmente es "postgres" para PostgreSQL
$password = "aeup3Y3BEkRSCLz52RMkZH23adtBSarE"; // Contraseña proporcionada

// Crear la cadena de conexión
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Conectar a la base de datos PostgreSQL
$conn = pg_connect($conn_string);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . pg_last_error());
}
?>
