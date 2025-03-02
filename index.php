<?php
include 'cards_db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Tarjetas Fake</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Generador de Tarjetas Fake</h1>

        <form method="POST" action="generate.php">
            <label for="bin">BIN:</label>
            <input type="text" id="bin" name="bin" placeholder="Ingrese el BIN" required>
            <button type="submit">Generar Tarjeta</button>
        </form>
    </div>
</body>
</html>
