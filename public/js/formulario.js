function actualizarFormulario() {
    fetch('/api/formulario-datos')
        .then(response => response.json())
        .then(data => {
            actualizarSelect('modalidad', data.modalidades);
            actualizarSelect('nivel', data.niveles);
            actualizarSelect('plantel', data.planteles);
            actualizarSelect('carreras', data.carreras);
        })
        .catch(error => console.error('Error cargando los datos:', error));
}

function actualizarSelect(id, items) {
    const select = document.getElementById(id);
    if (!select) return; // Evita errores si el select no existe
    select.innerHTML = '<option value="">- Seleccionar -</option>';
    items.forEach(item => {
        const option = document.createElement('option');
        option.value = item.id;
        option.textContent = item.nombre;  // Ajuste importante
        select.appendChild(option);
    });
}

function mostrarFormulario() {
    document.getElementById("formulario-ventana").style.display = "block";
}

function minimizarFormulario() {
    document.getElementById("formulario-ventana").classList.toggle("minimizado");
}

function cerrarFormulario() {
    document.getElementById("formulario-ventana").style.display = "none";
}

// Cargar datos al iniciar la página
document.addEventListener('DOMContentLoaded', actualizarFormulario);
