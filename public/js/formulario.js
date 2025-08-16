document.addEventListener('DOMContentLoaded', function () {

    //Filtrar carreras en funcion del plantel elegido
    document.getElementById('planteles').addEventListener('change', function () {
        const plantelId = this.value;
        const carrerasSelect = document.getElementById('carreras');
        carrerasSelect.innerHTML = '<option value="">Cargando...</option>';

        if (!plantelId) {
            carrerasSelect.innerHTML = '<option value="">Elige tu carrera</option>';
            return;
        }

        fetch(route('planteles.carreras', plantelId))
            .then(res => res.json())
            .then(data => {
                //En caso de que el usuario aliga la opcion de "Elige tu plantel" otra vez, por alguna razon
                if(plantelId === "0"){
                    carrerasSelect.innerHTML = '<option value="">Elige tu carrera</option>';
                    carrerasSelect.disabled = true;
                }else{
                    //En caso de que el usuario eliga entre un plantel CECyTE / EMSAD
                    if(data.length != 0){
                        carrerasSelect.innerHTML = '<option value="">Elige tu carrera</option>';
                        data.forEach(carrera => {
                            const option = document.createElement('option');
                            option.value = carrera.id;
                            option.textContent = carrera.nombre;
                            carrerasSelect.appendChild(option);
                        });
                        carrerasSelect.disabled = false;
                    }else{
                        carrerasSelect.innerHTML = '<option value="13">Bachillerato general</option>';
                        carrerasSelect.disabled = false;
                    }
                }
            })
            .catch(() => {
                carrerasSelect.innerHTML = '<option value="">Error al cargar, intentelo de nuevo</option>';
                carrerasSelect.disabled = true;
            });
    });

    //Introducir respuesta a la BD y dar feedback al usuario
    const userFeedbackElement = document.getElementById('btnFormularioContainer');
    const htmlOriginal = userFeedbackElement.innerHTML;

    userFeedbackElement.text
    document.getElementById('formularioPlanteles').addEventListener('submit', async function (event) {
        event.preventDefault();
        const infoFormulario = new FormData(this);
        try {
            const response = await fetch(route('formulario.enviar'), {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json' 
                },
                body: infoFormulario
            });

            if (!response.ok) {
                // Manejar errores de validacion laravel
                const errorData = await response.json();
                console.error('Error de validacion:', errorData);

                userFeedbackElement.innerHTML = htmlOriginal + '<p style="color: red; font-weight:bold;">Error en el formulario. Revisa los datos o rellena todos los campos.</p>';
                setTimeout(() => {
                    userFeedbackElement.innerHTML = htmlOriginal;
                }, 5000);
                return;
            }

            const respuesta = await response.json();

            if (respuesta.resultado === 'exito') {
                userFeedbackElement.innerHTML = htmlOriginal + '<p style="color: green; font-weight:bold;">Formulario enviado</p>';
                limpiarRespuestas();
                setTimeout(() => {
                    userFeedbackElement.innerHTML = htmlOriginal;
                }, 5000);
                // console.log('inicioCorreo');
                enviarEmail(infoFormulario);
                // console.log('finCorreo');
            } else {
                userFeedbackElement.innerHTML = htmlOriginal + '<p style="color: red; font-weight:bold;">Error inesperado, envia el formulario nuevamente</p>';
                limpiarRespuestas();
                setTimeout(() => {
                    userFeedbackElement.innerHTML = htmlOriginal;
                }, 5000);
            }
        } catch (error) {
            console.error('Error parsing JSON or network issue:', error);
        }
    });

});

function limpiarRespuestas() {
    const textInputs = document.getElementsByClassName("textInput");
    const selectMenus = document.getElementsByClassName("selectMenu");

    Array.from(textInputs).forEach(input => {
        input.value = "";
    });

    Array.from(selectMenus).forEach(selectMenu => {
        selectMenu.value = "0";
    });

}

async function enviarEmail(informacion, numIntentos = 3) {
    for (let intentos = 0; intentos < numIntentos; intentos++){
        const mail = await fetch(route('formulario.enviar.email'), {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            },
            body: informacion
        });
    
        const respuesta = await mail.json();
    
        if (respuesta.estado === 'exito'){
            // console.log('Correo mandado');
            return;
        }else{
            console.warn('fail: ' + respuesta.error);
            await new Promise(resolve => setTimeout(resolve, 1000));
        }
    }
}

function mostrarFormulario() {
    document.getElementById('formulario-ventana').style.display = 'block';
}

function cerrarFormulario() {
    document.getElementById('formulario-ventana').style.display = 'none';
}