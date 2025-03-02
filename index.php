<?php
// index.php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="verify.php" method="POST">
        <label for="phoneNumber">Número de Teléfono (Venezuela):</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <button type="submit">Enviar Código</button>
    </form>
</body>
</html>
