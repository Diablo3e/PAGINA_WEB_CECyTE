let lastActiveTab = "admin-gestion"; // Guarda la última pestaña activa

function showTab(tabId) {
    document.querySelectorAll('.content').forEach(content => content.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));

    document.getElementById(tabId).classList.add('active');
    document.querySelector(`.tab[onclick="showTab('${tabId}')"]`).classList.add('active');

    lastActiveTab = tabId;

    moveIndicatorToActiveTab(); // <-- aquí se asegura que se mueva la flecha
}



function goBack() {
    document.getElementById('details').classList.remove('active');
    document.getElementById(lastActiveTab).classList.add('active');
}

// Inicializar el indicador al cargar la página
function moveIndicatorToActiveTab() {
    const activeTab = document.querySelector('.tab.active');
    const indicator = document.getElementById('indicator');
    if (activeTab && indicator) {
        indicator.style.left = `${activeTab.offsetLeft + activeTab.offsetWidth / 2 - 10}px`;
    }
}

// Mover al cargar completamente
window.addEventListener('load', () => {
    moveIndicatorToActiveTab();
});
