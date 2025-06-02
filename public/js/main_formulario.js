$(document).ready(function() {
    $('#planteles').on('change', function() {
        var plantelId = $(this).val();
        var $carreras = $('#carreras');
        $carreras.html('<option value="">Cargando...</option>');

        if (!plantelId) {
            $carreras.html('<option value="">Elige tu carrera</option>');
            return;
        }

        $.ajax({
            url: '/carreras/' + plantelId,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var options = '<option value="">Elige tu carrera</option>';
                $.each(data, function(index, carrera) {
                    options += '<option value="' + carrera.id + '">' + carrera.nombre + '</option>';
                });
                $carreras.html(options);
            },
            error: function() {
                $carreras.html('<option value="">Error al cargar las carreras</option>');
            }
        });
    });
});
function mostrarFormulario() {
    document.getElementById('formulario-ventana').style.display = 'block';
}

function cerrarFormulario() {
    document.getElementById('formulario-ventana').style.display = 'none';
}