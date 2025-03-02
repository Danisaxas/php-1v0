// cards_db.php
<?php
// Incluir la conexión a la base de datos
include('db_connection.php');

function guardar_tarjeta($tarjeta, $conn) {
    // Preparamos la consulta SQL para insertar los datos
    $query = "INSERT INTO tarjetas (numero, expiracion, cvv) VALUES ($1, $2, $3)";
    
    // Ejecutamos la consulta con los valores
    $result = pg_query_params($conn, $query, array($tarjeta['numero'], $tarjeta['expiracion'], $tarjeta['cvv']));
    
    if (!$result) {
        die('Error al guardar la tarjeta: ' . pg_last_error($conn));
    }
}
?>
