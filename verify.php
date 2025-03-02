<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredCode = $_POST['code'];
    $actualCode = $_SESSION['verificationCode'];

    if ($enteredCode == $actualCode) {
        header('Location: register.php');
    } else {
        echo "Código incorrecto. Intenta nuevamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Código</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Verificar Código</h1>
    <form action="verify.php" method="POST">
        <label for="code">Código de Verificación:</label>
        <input type="text" id="code" name="code" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
