

const planteles = {
    plantel1: {
        tipo: "cecyte",
        nombre: "Plantel Cholula",
    },
    plantel2: {
        tipo: "cecyte",
        nombre: "Plantel Chignahuapan",
    },
    plantel3: {
        tipo: "emsad",
        nombre: "Plantel EMsaD Ameluca",
    },
    plantel4: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Boca del Monte",
    },
    plantel5: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Buena Vista",
    },
    plantel6: {
        tipo: "emsad",
        nombre: "Plantel EMSaD La Pahua",
    },
    plantel7: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Mexcaltochintla",
    },
    plantel8: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Naranjastitla",
    },
    plantel9: {
        tipo: "emsad",
        nombre: "Plantel EMSaD Santa Elena",
    },
    plantel10: {
        tipo: "cecyte",
        nombre: "Plantel Guadalupe Victoria",
    },
    plantel11: {
        tipo: "cecyte",
        nombre: "Plantel Huejotzingo",
    },
    plantel12: {
        tipo: "cecyte",
        nombre: "Plantel Magdalena",
    },
    plantel13: {
        tipo: "cecyte",
        nombre: "Plantel Tecamachalco",
    },
    plantel14: {
        tipo: "cecyte",
        nombre: "Plantel Tehuitzingo",
    },
    plantel16: {
        tipo: "emsad",
        nombre: "Plantel Tlaolantongo",
    },
    plantel15: {
        tipo: "cecyte",
        nombre: "Plantel Tlacotepec",
    },
    plantel17: {
        tipo: "cecyte",
        nombre: "Plantel Venustiano Carranza",
    },
    plantel18: {
        tipo: "cecyte",
        nombre: "Plantel Xicotepec",
    },

};
// Definir la ruta base para los planteles (ajusta esto según tu ruta en Laravel)
const RUTA_BASE_PLANTELES = '/planteles/detalle'; // Cambia esto si tu ruta es diferente

// Función para manejar la selección de plantel
function handlePlantelSelection(plantelId) {
    // Redirigir a la página de detalle con el ID del plantel
    window.location.href = `${RUTA_BASE_PLANTELES}/${plantelId}`;
}

// Función para inicializar la lista de planteles
function initPlantelesList() {
    const listaCECyTE = document.getElementById('lista-cecyte');
    const listaEMSaD = document.getElementById('lista-emsad');

    // Validar que existan los contenedores
    if (!listaCECyTE || !listaEMSaD) return;

    // Limpiar listas
    listaCECyTE.innerHTML = '';
    listaEMSaD.innerHTML = '';

    // Ordenar planteles por nombre
    const sortedPlanteles = Object.entries(planteles).sort((a, b) =>
        a[1].nombre.localeCompare(b[1].nombre)
    );

    sortedPlanteles.forEach(([id, plantel]) => {
        const listItem = `
            <div class="list-group-item plantel-list-item" data-plantel="${id}">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 text-truncate">${plantel.nombre}</h5>
                    <span class="badge ${plantel.tipo === 'cecyte' ? 'bg-primary' : 'bg-success'}">
                        ${plantel.tipo.toUpperCase()}
                    </span>
                </div>
            </div>
        `;

        if (plantel.tipo === 'cecyte') {
            listaCECyTE.insertAdjacentHTML('beforeend', listItem);
        } else {
            listaEMSaD.insertAdjacentHTML('beforeend', listItem);
        }
    });

    // Delegación de eventos para mejor rendimiento
    document.addEventListener('click', (e) => {
        const item = e.target.closest('.plantel-list-item');
        if (item) {
            handlePlantelSelection(item.dataset.plantel);
        }
    });
}

// Función para inicializar la interacción con el mapa
function initMapInteraction() {
    // Selector móvil
    const mobileSelector = document.getElementById('mobilePlantelSelector');
    if (mobileSelector) {
        mobileSelector.addEventListener('change', function() {
            if (this.value) handlePlantelSelection(this.value);
        });
    }

    // Areas del mapa (si existen)
    document.querySelectorAll('area.plantel-area').forEach(area => {
        area.addEventListener('click', (e) => {
            e.preventDefault();
            if (area.dataset.plantel) {
                handlePlantelSelection(area.dataset.plantel);
            }
        });
    });

    // Centrar mapa (con validación)
    const mapImage = document.getElementById('mapImage');
    if (mapImage) {
        if (mapImage.complete) {
            centerMap();
        } else {
            mapImage.addEventListener('load', centerMap);
        }
    }
}

function centerMap() {
    const container = document.querySelector('.map-container'); // Cambiado a .map-container
    const mapImage = document.getElementById('mapImage');

    // Validar que existan los elementos
    if (!container || !mapImage) return;

    // Solo centrar si las dimensiones son válidas
    if (mapImage.width > 0 && mapImage.height > 0) {
        container.scrollLeft = (mapImage.width - container.clientWidth) / 2;
        container.scrollTop = (mapImage.height - container.clientHeight) / 2;
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    initPlantelesList();
    initMapInteraction();

    // Tooltips de Bootstrap (solo si Bootstrap está cargado)
    if (typeof bootstrap !== 'undefined') {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.forEach(tooltipTriggerEl => {
            new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
});
