<?php
session_start();

// Verifica si ya hay un carrito
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Agrega el producto al carrito
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $_SESSION['cart'][] = $product_id; // Agrega el id del producto
}

header('Location: view_cart.php'); // Redirige al carrito
?>
