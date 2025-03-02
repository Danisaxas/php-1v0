<?php
session_start();
if ($_SESSION['admin'] != true) {
    header("Location: login.php");
    exit();
}

include 'cards_db.php';

$result = $conn->query("SELECT * FROM tarjetas");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Desarrollador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Panel de Desarrollador</h1>
        
        <h2>Listado de Tarjetas Generadas:</h2>
        <table>
            <tr>
                <th>Número</th>
                <th>Expiración</th>
                <th>CVV</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['numero']; ?></td>
                    <td><?php echo $row['expiracion']; ?></td>
                    <td><?php echo $row['cvv']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
