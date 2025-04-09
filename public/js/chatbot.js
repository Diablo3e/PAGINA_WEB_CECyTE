document.addEventListener('DOMContentLoaded', function () {
    const oceloteIcon = document.getElementById("ocelote-icon");
    const chatbot = document.getElementById("chatbot");
    const sendButton = document.getElementById("chatbot-send");
    const inputField = document.getElementById("chatbot-input");
    const messages = document.getElementById("chatbot-messages");

    // Respuestas predefinidas
    const responses = {
        "1": "Las fechas de inscripción suelen ser entre los meses de mayo y junio. Te recomendamos estar atento a nuestra página web o redes sociales para la confirmación de las fechas exactas.",
        "2": "Las fechas de reinscripción suelen ser entre los meses de mayo y junio. Te recomendamos estar atento a nuestra página web o redes sociales para la confirmación de las fechas exactas.",
        "3": "Contamos con planteles en varias localidades, incluyendo Puebla, Tehuacán y Cholula. Consulta la página de contacto para conocer la ubicación exacta de cada plantel.",
        "4": "Ofrecemos diversas carreras técnicas como: Informática, Electrónica, Mecatrónica, Contabilidad, Turismo, entre otras.",
        "5": "El costo de inscripción varía dependiendo del plantel y la carrera seleccionada. Te recomendamos consultar la página oficial o contactar con nosotros para obtener la información más precisa.",
        "6": "El costo de reinscripción varía dependiendo del plantel y la carrera seleccionada. Te recomendamos consultar la página oficial o contactar con nosotros para obtener la información más precisa.",
        "default": "Por favor, selecciona un número válido de las opciones disponibles."
    };

    if (oceloteIcon && chatbot) {
        oceloteIcon.addEventListener("click", function () {
            chatbot.classList.add("active");
            chatbot.classList.remove("hidden");
            oceloteIcon.style.display = "none";
            initializeChat(); // Llamada a la función para inicializar el chat con las opciones
        });

        // Cerrar el chatbot cuando se haga clic fuera
        document.addEventListener("click", function (event) {
            if (!chatbot.contains(event.target) && event.target !== oceloteIcon) {
                chatbot.classList.add("hidden");
                chatbot.classList.remove("active");
                oceloteIcon.style.display = "block";
            }
        });
    }

    if (sendButton && inputField && messages) {
        sendButton.addEventListener("click", function () {
            sendMessage();
        });

        inputField.addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });

        function sendMessage() {
            const userMessage = inputField.value.trim();
            if (userMessage) {
                const userMessageElement = document.createElement("div");
                userMessageElement.textContent = userMessage;
                userMessageElement.classList.add("user-message");
                messages.appendChild(userMessageElement);

                const botMessage = document.createElement("div");
                botMessage.textContent = getBotResponse(userMessage);
                botMessage.classList.add("bot-message");
                messages.appendChild(botMessage);

                inputField.value = "";
                messages.scrollTop = messages.scrollHeight;
            }
        }

        // Obtener la respuesta del bot según la entrada del usuario
        function getBotResponse(userMessage) {
            const message = userMessage.trim();
            return responses[message] || responses["default"];
        }
    }

    // Función para inicializar el chat con las opciones
    function initializeChat() {
        displayMessage("¡Hola! Soy el chatbot. Por favor, selecciona una pregunta eligiendo un número:", "bot");
        displayMessage("1. ¿Cuáles son las fechas de inscripción?", "bot");
        displayMessage("2. ¿Cuáles son las fechas de reinscripción?", "bot");
        displayMessage("3. ¿Qué planteles existen?", "bot");
        displayMessage("4. ¿Cuáles son las carreras técnicas con las que contamos?", "bot");
        displayMessage("5. ¿Cuál es el costo de inscripción?", "bot");
        displayMessage("6. ¿Cuál es el costo de reinscripción?", "bot");
    }

    // Función para mostrar el mensaje
    function displayMessage(message, sender) {
        const messageElement = document.createElement("div");
        messageElement.classList.add("message");
        messageElement.classList.add(sender);
        messageElement.textContent = message;
        messages.appendChild(messageElement);
        messages.scrollTop = messages.scrollHeight; // Mantener el scroll al final
    }
});
