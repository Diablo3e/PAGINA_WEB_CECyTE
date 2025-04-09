let lastActiveTab = "admin-gestion"; // Guarda la última pestaña activa

function showTab(tabId) {
    document.querySelectorAll('.content').forEach(content => content.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));

    document.getElementById(tabId).classList.add('active');
    document.querySelector(`.tab[onclick="showTab('${tabId}')"]`).classList.add('active');

    lastActiveTab = tabId;
}

function showDetails(courseId) {
    const details = {
        'gestion-administrativa': {
            title: 'Procesos de Gestión Administrativa',
            description: 'Aprende sobre administración de recursos, procesos empresariales y liderazgo organizacional.'
        },
        'programacion': {
            title: 'Programación',
            description: 'Domina los lenguajes de programación más utilizados en la industria y desarrolla soluciones innovadoras.'
        },
        'produccion-industrial': {
            title: 'Producción Industrial',
            description: 'Aprende sobre los procesos industriales, eficiencia productiva y control de calidad en la manufactura.'
        },
        'mantenimiento-automotriz': {
            title: 'Mantenimiento Automotriz',
            description: 'Especialízate en el diagnóstico, reparación y mantenimiento de vehículos automotores.'
        },
        'hoteleria-servicios': {
            title: 'Servicios de Hotelería',
            description: 'Prepárate para una carrera en el sector turístico y hotelero con habilidades en gestión y atención al cliente.'
        }
    };

    document.getElementById('details-title').innerText = details[courseId].title;
    document.getElementById('details-description').innerText = details[courseId].description;

    document.querySelectorAll('.content').forEach(content => content.classList.remove('active'));
    document.getElementById('details').classList.add('active');
}

function goBack() {
    document.getElementById('details').classList.remove('active');
    document.getElementById(lastActiveTab).classList.add('active');
}
