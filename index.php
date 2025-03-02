<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Online de Cuentas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Bienvenido a la Tienda Online de Cuentas</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="products/product_list.php">Productos</a></li>
                <li><a href="user/login.php">Iniciar sesión</a></li>
                <li><a href="user/register.php">Registrarse</a></li>
                <li><a href="cart/view_cart.php">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Productos Destacados</h2>
        <div class="product-container">
            <!-- Aquí se mostrarán los productos manualmente por ahora -->
            <div class="product">
                <h3>Cuenta Spotify Premium</h3>
                <p>Acceso completo a Spotify Premium para escuchar música sin anuncios.</p>
                <p>Precio: $9.99</p>
                <a href="products/product_details.php?id=1">Ver más</a>
            </div>

            <div class="product">
                <h3>Cuenta Netflix</h3>
                <p>Acceso completo a Netflix para ver series y películas ilimitadas.</p>
                <p>Precio: $12.99</p>
                <a href="products/product_details.php?id=2">Ver más</a>
            </div>

            <!-- Más productos pueden ser añadidos aquí -->
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Tienda Online de Cuentas. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
