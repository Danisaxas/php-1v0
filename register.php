<?php
    include('includes/config.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $query = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";
        mysqli_query($conn, $query);

        header("Location: login.php");
    }
?>

<form action="register.php" method="post">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Registrarse</button>
</form>
