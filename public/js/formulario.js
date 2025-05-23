function actualizarSelect(id, items) {
    const select = document.getElementById(id);
    if (!select) return;
    select.innerHTML = '<option value="">- Seleccionar -</option>';
    items.forEach(item => {
        const option = document.createElement('option');
        option.value = item.id;
        option.textContent = item.nombre;
        select.appendChild(option);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    actualizarSelect('plantel', []);
    actualizarSelect('carrera', []);

    document.getElementById('plantel').addEventListener('change', function () {
        const plantelId = this.value;
        if (!plantelId) {
            actualizarSelect('carrera', []);
            return;
        }
        fetch(`/planteles/${plantelId}/carreras`)
            .then(res => res.json())
            .then(data => actualizarSelect('carrera', data))
            .catch(() => actualizarSelect('carrera', []));
    });
});
