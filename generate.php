// generate.php
<?php
// Incluir los archivos necesarios
include('cards_db.php');

// Datos de la tarjeta a generar
$tarjeta = [
    'numero' => '1234567890123456', // Este debe ser generado o recibido por algún método
    'expiracion' => '12/23',
    'cvv' => '123'
];

// Llamar a la función para guardar la tarjeta
guardar_tarjeta($tarjeta, $conn);

// Mensaje de éxito
echo "Tarjeta guardada correctamente.";
?>
