// generate.php
<?php
// Incluir los archivos necesarios
include('cards_db.php');

// Datos de la tarjeta a generar (puedes modificar estos valores o recibirlos desde un formulario)
$tarjeta = [
    'numero' => '1234567890123456', // Número de tarjeta
    'expiracion' => '12/23', // Fecha de expiración
    'cvv' => '123' // CVV
];

// Llamamos a la función para guardar la tarjeta
guardar_tarjeta($tarjeta, $conn);

// Mensaje de éxito
echo "Tarjeta guardada correctamente.";
?>
