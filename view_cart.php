<?php
session_start();

// Si el carrito está vacío
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    echo "El carrito está vacío.";
} else {
    echo "<h2>Tu Carrito</h2>";
    foreach ($_SESSION['cart'] as $product_id) {
        echo "<p>Producto ID: " . $product_id . "</p>";
        // Aquí podrías agregar más detalles del producto como el nombre, precio, etc.
    }
    echo "<a href='checkout.php'>Proceder al Pago</a>";
}
?>
