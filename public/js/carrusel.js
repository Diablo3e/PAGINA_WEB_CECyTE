let indice = 0;
let intervalo;

function cambiarImagen(direccion = 1) {
    const imagenes = document.querySelectorAll('.imagenes img');
    indice += direccion;

    if (indice >= imagenes.length) {
        indice = 0;
    } else if (indice < 0) {
        indice = imagenes.length - 1;
    }

    const desplazamiento = -indice * 100;
    document.querySelector('.imagenes').style.transform = `translateX(${desplazamiento}%)`;
}

// Función para iniciar carrusel automático
function iniciarCarrusel() {
    intervalo = setInterval(() => {
        cambiarImagen(1);
    }, 3000);
}

// Detener el carrusel cuando el usuario interactúe con los botones
function detenerCarrusel() {
    clearInterval(intervalo);
}

// Iniciar el carrusel automático al cargar la página
window.onload = iniciarCarrusel;

document.querySelector(".prev").addEventListener("click", () => {
    detenerCarrusel();
    cambiarImagen(-1);
});

document.querySelector(".next").addEventListener("click", () => {
    detenerCarrusel();
    cambiarImagen(1);
});
