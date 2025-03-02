<?php
// Función para generar una tarjeta fake
function generar_tarjeta($bin) {
    // Crear una fecha de expiración aleatoria
    $mes = rand(1, 12);
    $año = rand(2025, 2030);

    // Generar el número de la tarjeta (simulando un BIN de 6 dígitos)
    $numero_tarjeta = $bin . str_pad(rand(100000, 999999), 10, '0', STR_PAD_LEFT);

    // Generar el código CVV aleatorio
    $cvv = rand(100, 999);

    return [
        'numero_tarjeta' => $numero_tarjeta,
        'expiracion' => "$mes/$año",
        'cvv' => $cvv
    ];
}

// Función para guardar una tarjeta generada en la base de datos
function guardar_tarjeta($tarjeta, $conn) {
    $stmt = $conn->prepare("INSERT INTO tarjetas (numero, expiracion, cvv) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $tarjeta['numero_tarjeta'], $tarjeta['expiracion'], $tarjeta['cvv']);
    $stmt->execute();
    $stmt->close();
}
?>
