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
                if(!$.isEmptyObject(data)){
                    var options = '<option value="">Elige tu carrera</option>';
                    $.each(data, function(index, carrera) {
                        options += '<option value="' + carrera.id + '">' + carrera.nombre + '</option>';
                    });
                    $carreras.html(options);
                }else{
                    //Hay un bug que sucede aveces el cual no cambiar correctamente este elemento, por eso el ciclo while
                    while($carreras.html() !== `<option value="13">Bachillerato general</option>`){
                        $carreras.html('<option value="13">Bachillerato general</option>');
                    }
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