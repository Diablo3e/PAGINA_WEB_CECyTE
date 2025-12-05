const divFiltros = document.getElementById('containerParaFiltro');
const divResize = document.getElementById('zoom');

// Funciones de zoom, con event listeners
var zoom = 1;
document.getElementById("mas").addEventListener("click", function (e) {
  zoom += .10;
  resize();
});
document.getElementById("menos").addEventListener("click", function (e) {
  if (zoom > 0.2) {
    zoom -= .10;
    resize();
  }
});
function resize() {
  divResize.style.zoom = zoom;
}

//Funciones de filtros de color, llamadas por onclick
function escalaGrises() {
  divFiltros.classList = '';
  divFiltros.classList.add('gray');
}
function escalaNegativa() {
  divFiltros.classList = '';
  divFiltros.classList.add('negative');
}
function escalaNormal() {
  divFiltros.classList = '';
}

//--------------------Interacciones del boton de texto a lenguaje--------------------
let audioEnabled = false;
const audioToggle = document.getElementById('audio-toggle');

audioToggle.addEventListener('click', () => {
  audioEnabled = !audioEnabled;
  audioToggle.style.backgroundColor = audioEnabled ? '#660000' : '';

  // Cuando desactivas el audio, se detiene cualquier lectura en curso,
  // pero NO se lee nada automáticamente al activarlo
  if (!audioEnabled) {
    window.speechSynthesis.cancel();
  }
});

// Función para leer texto SOLO cuando el mouse pase sobre un elemento
function speakText(text) {
  if (!audioEnabled) return;  // Solo lee si audio está activo
  if (!text.trim()) return;   // Ignorar texto vacío

  window.speechSynthesis.cancel(); // Cancelar cualquier lectura previa para que no se mezclen audios
  const utterance = new SpeechSynthesisUtterance(text);
  utterance.lang = 'es-MX';
  utterance.rate = 1;
  window.speechSynthesis.speak(utterance);
}

// Agregamos event listener SOLO para evento mouseenter en todos los elementos visibles con texto
document.querySelectorAll('body *').forEach(el => {
  el.addEventListener('mouseenter', () => {
    if (!audioEnabled) return; // No hacer nada si audio no está activo

    // Obtenemos el texto visible del elemento
    const text = el.innerText || el.textContent;
    if (text && text.trim().length > 0) {
      speakText(text.trim());
    }
  });
});


//--------------Manejo de texto a lenguaje------------------------
let lecturaActiva = false;
const synth = window.speechSynthesis;

// Activar lectura al pasar el mouse por texto del menú
function activarLectura() {
  const elementos = document.querySelectorAll('.navbar-nav a, .dropdown-item');

  elementos.forEach(el => {
    el.addEventListener('mouseenter', leerTexto);
    el.addEventListener('mouseleave', detenerLectura);
  });
}

// Desactivar eventos
function desactivarLectura() {
  const elementos = document.querySelectorAll('.navbar-nav a, .dropdown-item');

  elementos.forEach(el => {
    el.removeEventListener('mouseenter', leerTexto);
    el.removeEventListener('mouseleave', detenerLectura);
  });
}

// Leer el texto en voz alta
function leerTexto(event) {
  if (!lecturaActiva) return;

  const texto = event.target.innerText.trim();
  if (texto.length === 0) return;

  const utterance = new SpeechSynthesisUtterance(texto);
  utterance.lang = 'es-MX'; // Español mexicano
  synth.speak(utterance);
}

// Detener lectura al salir del elemento
function detenerLectura() {
  synth.cancel();
}

//Detener lectura si se sale de la pagina
window.addEventListener('visibilitychange', () => {
  if (document.visibilityState === "hidden") {
    window.speechSynthesis.cancel();
  }
});
//Funcion Safari
window.addEventListener("pagehide", () => {
  if (document.visibilityState === "hidden") {
    window.speechSynthesis.cancel();
  }
});