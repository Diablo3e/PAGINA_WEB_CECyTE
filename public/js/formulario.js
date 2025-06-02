document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('planteles').addEventListener('change', function () {
        const plantelId = this.value;
        const carrerasSelect = document.getElementById('carreras');
        carrerasSelect.innerHTML = '<option value="">Cargando...</option>';

        if (!plantelId) {
            carrerasSelect.innerHTML = '<option value="">Elige tu carrera</option>';
            return;
        }

        fetch(`/planteles/${plantelId}/carreras`)
            .then(res => res.json())
            .then(data => {
                carrerasSelect.innerHTML = '<option value="">Elige tu carrera</option>';
                data.forEach(carrera => {
                    const option = document.createElement('option');
                    option.value = carrera.id;
                    option.textContent = carrera.nombre;
                    carrerasSelect.appendChild(option);
                });
            })
            .catch(() => {
                carrerasSelect.innerHTML = '<option value="">Error al cargar</option>';
            });
    });
});
