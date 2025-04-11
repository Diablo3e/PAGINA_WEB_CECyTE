let chatInitialized = false;
let waitingForHello = false;

const responses = {
  "hola": "¡Gracias por saludar! ¿En qué puedo ayudarte? Selecciona una opción:",
  "1": "📅 Fechas de inscripción: Del 15 de mayo al 20 de junio.",
  "2": "📅 Fechas de reinscripción: Del 5 al 30 de julio.",
  "3": "🏫 Planteles: Puebla, Tehuacán, Cholula, Atlixco y Huejotzingo.",
  "4": "📚 Carreras: Informática, Electrónica, Mecatrónica, Contabilidad, Turismo.",
  "5": "💲 Inscripción: $500-$800 (varía por plantel).",
  "6": "💲 Reinscripción: $300-$500 (varía por plantel).",
  "default": "Por favor escribe 'Hola' para comenzar 👋"
};

function displayMessage(message, sender) {
  const chatlog = document.getElementById("chatbot-messages");
  const messageElement = document.createElement("div");
  messageElement.classList.add("message");
  messageElement.classList.add(sender);
  messageElement.textContent = message;
  chatlog.appendChild(messageElement);
  chatlog.scrollTop = chatlog.scrollHeight;
}

function showWelcome() {
  displayMessage("¡Bienvenido al CECyTE Puebla! 🎓", "bot");
  displayMessage("Soy Cecilio, tu asistente virtual.", "bot");
  displayMessage("Para comenzar, escribe *Hola*", "bot");
  waitingForHello = true;
}

function showOptions() {
  displayMessage(responses["hola"], "bot");
  displayMessage("1️⃣ Fechas de inscripción", "bot");
  displayMessage("2️⃣ Fechas de reinscripción", "bot");
  displayMessage("3️⃣ Planteles disponibles", "bot");
  displayMessage("4️⃣ Carreras técnicas", "bot");
  displayMessage("5️⃣ Costo de inscripción", "bot");
  displayMessage("6️⃣ Costo de reinscripción", "bot");
  waitingForHello = false;
}

function initializeChat() {
  if (!chatInitialized) {
    showWelcome();
    chatInitialized = true;
  }
}

function handleUserInput() {
  const userInput = document.getElementById("chatbot-input").value.toLowerCase().trim();
  if (userInput !== "") {
    displayMessage(userInput, "user");
    document.getElementById("chatbot-input").value = "";

    if (waitingForHello && userInput === "hola") {
      setTimeout(showOptions, 800);
    } else if (!waitingForHello && responses[userInput]) {
      setTimeout(() => displayMessage(responses[userInput], "bot"), 800);
    } else {
      setTimeout(() => displayMessage(responses["default"], "bot"), 800);
    }
  }
}

// Event Listeners
document.getElementById("ocelote-icon").addEventListener("click", function() {
  const chatbot = document.getElementById("chatbot");
  chatbot.style.display = "flex";
  initializeChat();
});

document.getElementById("chatbot-send").addEventListener("click", handleUserInput);

document.getElementById("chatbot-input").addEventListener("keypress", function(e) {
  if (e.key === "Enter") handleUserInput();
});

document.getElementById("close-chatbot").addEventListener("click", function() {
  document.getElementById("chatbot").style.display = "none";
});
