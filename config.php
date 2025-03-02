<?php
$servername = "localhost";
$username = "root"; // Usualmente es "root" en XAMPP
$password = ""; // Si no has establecido una contraseña, déjalo vacío
$dbname = "tarjetas_fake";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa!";
?>
