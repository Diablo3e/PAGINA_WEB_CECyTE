$(document).ready(function() {
    // Cuando se selecciona un nivel
    $('#nivel').on('change', function() {
        var nivelId = $(this).val();

        // Limpiar selects dependientes
        $('#plantel').html('<option value="">Selecciona un plantel</option>');
        $('#carrera').html('<option value="">Selecciona una carrera</option>');

        // Si hay un nivel seleccionado
        if (nivelId) {
            $.ajax({
                url: '/planteles/' + nivelId,  // Enviar la solicitud AJAX
                type: 'GET',
                success: function(data) {
                    $('#plantel').html('<option value="">Selecciona un plantel</option>');  // Limpiar primero
                    $.each(data, function(key, plantel) {
                        $('#plantel').append('<option value="' + plantel.id + '">' + plantel.nombre + '</option>'); // Agregar planteles
                    });
                },
                error: function(xhr, status, error) {
                    // Si ocurre un error, mostrar un mensaje
                    alert('Hubo un problema al obtener los planteles. Intenta de nuevo.');
                }
            });
        }
    });

    // Cuando se selecciona un plantel
    $('#plantel').on('change', function() {
        var plantelId = $(this).val();
        $('#carrera').html('<option value="">Selecciona una carrera</option>');  // Limpiar las carreras

        // Si hay un plantel seleccionado
        if (plantelId) {
            $.ajax({
                url: '/carreras/' + plantelId,  // Enviar la solicitud AJAX
                type: 'GET',
                success: function(data) {
                    $('#carrera').html('<option value="">Selecciona una carrera</option>');  // Limpiar primero
                    $.each(data, function(key, carrera) {
                        $('#carrera').append('<option value="' + carrera.id + '">' + carrera.nombre + '</option>'); // Agregar carreras
                    });
                },
                error: function(xhr, status, error) {
                    // Si ocurre un error, mostrar un mensaje
                    alert('Hubo un problema al obtener las carreras. Intenta de nuevo.');
                }
            });
        }
    });
});
