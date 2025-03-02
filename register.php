<?php
// register.php
session_start();
require_once 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $phoneNumber = $_SESSION['phoneNumber'];

    // Insertar el usuario en la base de datos
    $query = "INSERT INTO users (phone_number, username) VALUES (:phone_number, :username)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([':phone_number' => $phoneNumber, ':username' => $username]);

    echo "Cuenta creada con éxito. Bienvenido, $username!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nombre de Usuario</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Registrar Nombre de Usuario</h1>
    <form action="register.php" method="POST">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
