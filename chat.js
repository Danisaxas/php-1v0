document.getElementById('send-btn').addEventListener('click', function () {
    var message = document.getElementById('message').value;
    
    if (message.trim() !== '') {
        var messageDiv = document.createElement('div');
        messageDiv.classList.add('message', 'sent');
        messageDiv.innerHTML = `<p>${message}</p>`;
        
        document.querySelector('.messages').appendChild(messageDiv);
        document.getElementById('message').value = '';  // Limpiar el campo de texto
        
        // Simular una respuesta
        setTimeout(function () {
            var responseDiv = document.createElement('div');
            responseDiv.classList.add('message', 'received');
            responseDiv.innerHTML = `<p>Respuesta automática: ${message}</p>`;
            document.querySelector('.messages').appendChild(responseDiv);
        }, 1000);
    }
});
