<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
        $_SESSION['admin'] = true;
        header("Location: panel.php");
        exit();
    } else {
        $error = "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <form method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>

    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
</body>
</html>
