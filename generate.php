// generate.php
<?php
// Incluir los archivos necesarios para la conexión y las funciones
include('cards_db.php');  // Incluye la función guardar_tarjeta() de cards_db.php

// Datos de la tarjeta a generar (estos pueden ser dinámicos o recibidos desde un formulario)
$tarjeta = [
    'numero' => '1234567890123456',  // Número de tarjeta (puedes generar uno aleatorio o recibirlo por formulario)
    'expiracion' => '12/23',  // Fecha de expiración (también puede ser dinámica)
    'cvv' => '123'  // CVV de la tarjeta (esto también puede ser dinámico)
];

// Llamamos a la función para guardar la tarjeta en la base de datos
guardar_tarjeta($tarjeta, $conn);

// Mensaje de éxito
echo "Tarjeta guardada correctamente.";
?>
