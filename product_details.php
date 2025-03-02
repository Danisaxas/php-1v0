<?php
// Aquí agregamos el id del producto como un ejemplo
$product_id = isset($_GET['id']) ? $_GET['id'] : 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>Detalles del Producto</h1>
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../cart/view_cart.php">Carrito</a></li>
                <li><a href="../user/login.php">Iniciar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Cuenta Spotify Premium</h2>
        <p>Acceso completo a Spotify Premium para escuchar música sin anuncios.</p>
        <p>Precio: $9.99</p>
        <button><a href="../cart/add_to_cart.php?id=1">Agregar al Carrito</a></button>
    </main>

    <footer>
        <p>&copy; 2025 Tienda Online de Cuentas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
