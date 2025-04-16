<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cecilio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div id="chat-icon-container">
    <img src="{{ asset('imagenes/cecilio.png') }}" alt="Abrir Chatbot" id="ocelote-icon">
</div>

<div id="chat-container">
    <div id="chatbot">
        <div id="chatbot-header">
            <img src="{{ asset('imagenes/cecilio.jpg') }}" alt="Chatbot Icono" id="chatbot-img">
            <h2>Cecilio</h2>
            <button class="close-btn" id="close-chatbot"><i class="fas fa-times"></i></button>
        </div>
        <div id="chatbot-body">
            <div id="chatbot-messages"></div>
            <div id="chatbot-input-area">
              <input type="text" id="chatbot-input" placeholder="Escribe aquí..." autocomplete="off">
              <button id="chatbot-send"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
