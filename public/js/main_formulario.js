$(document).ready(function () {
    $('#planteles').on('change', function () {
        var plantelId = $(this).val();
        var $carreras = $('#carreras');
        $carreras.html('<option value="">Cargando...</option>');

        if (!plantelId) {
            $carreras.html('<option value="">Elige tu carrera</option>');
            return;
        }

        let peticionAJAX = null;
        if(peticionAJAX){
            peticionAJAX.abort();
        }

        peticionAJAX = $.ajax({
            url: route('carreras.por.plantel', plantelId),
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                //fixme: el timeout no es ideal, pero cubre la mayoria de los bugs y ya intente todo lo que se me ocurrio sin mucho mas exito 
                setTimeout(null, 500);
                if(!$.isEmptyObject(data)){
                    var options = '<option value="">Elige tu carrera</option>';
                    $.each(data, function(index, carrera) {
                        options += '<option value="' + carrera.id + '">' + carrera.nombre + '</option>';
                    });
                    $carreras.prop('disabled', false);
                    $carreras.html(options);
                }else{
                    $carreras.html('<option value="">Bachillerato general</option>');
                    $carreras.prop('disabled', true);
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