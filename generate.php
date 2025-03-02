<?php
include 'cards_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bin = $_POST['bin'];
    
    if(strlen($bin) == 6) {
        // Generar la tarjeta con el BIN
        $tarjeta = generar_tarjeta($bin);
        guardar_tarjeta($tarjeta, $conn);
        
        echo "<h2>Tarjeta Generada:</h2>";
        echo "Número de Tarjeta: " . $tarjeta['numero_tarjeta'] . "<br>";
        echo "Expiración: " . $tarjeta['expiracion'] . "<br>";
        echo "CVV: " . $tarjeta['cvv'] . "<br>";
    } else {
        echo "El BIN debe tener 6 dígitos.";
    }
}
?>
