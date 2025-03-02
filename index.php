<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
            <div class="header">
                <img src="assets/images/logo.png" alt="Logo" class="logo">
                <h2>Chat</h2>
            </div>
            <div class="contacts">
                <div class="contact">
                    <img src="assets/images/user1.png" alt="User" class="contact-img">
                    <p class="contact-name">Juan Pérez</p>
                </div>
                <div class="contact">
                    <img src="assets/images/user2.png" alt="User" class="contact-img">
                    <p class="contact-name">Ana Gómez</p>
                </div>
            </div>
        </div>

        <!-- Área de chat -->
        <div class="chat-area">
            <div class="chat-header">
                <h3>Juan Pérez</h3>
            </div>
            <div class="messages">
                <!-- Aquí se mostrarán los mensajes -->
                <div class="message sent">
                    <p>Hola, ¿cómo estás?</p>
                </div>
                <div class="message received">
                    <p>¡Bien, gracias! ¿Y tú?</p>
                </div>
            </div>
            <div class="message-input">
                <input type="text" id="message" placeholder="Escribe un mensaje...">
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>

    <script src="chat.js"></script>
</body>
</html>
