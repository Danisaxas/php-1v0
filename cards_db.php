// cards_db.php
<?php
// Incluir la conexión a la base de datos
include('db_connection.php');

function guardar_tarjeta($tarjeta, $conn) {
    $stmt = $conn->prepare("INSERT INTO tarjetas (numero, expiracion, cvv) VALUES (?, ?, ?)");
    
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    $stmt->bind_param("sss", $tarjeta['numero'], $tarjeta['expiracion'], $tarjeta['cvv']);
    $stmt->execute();
    $stmt->close();
}
?>
