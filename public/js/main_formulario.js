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
            url: route('carreras.por.plantel', plantelId),
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                if($.isEmptyObject(data)){
                    $carreras.html('<option value="">Bachillerato general</option>');
                    $carreras.prop('disabled', true);
                }else{
                    var options = '<option value="">Elige tu carrera</option>';
                    $.each(data, function(index, carrera) {
                        options += '<option value="' + carrera.id + '">' + carrera.nombre + '</option>';
                    });
                    $carreras.prop('disabled', false);
                    $carreras.html(options);
                }
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