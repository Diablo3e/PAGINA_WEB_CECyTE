function openTab(evt, tabName) {
    // Ocultar todas las pestañas
    const tabs = document.querySelectorAll('.tab-pane');
    tabs.forEach(tab => {
      tab.classList.remove('active');
    });
  
    // Eliminar la clase activa de todos los títulos
    const tabTitles = document.querySelectorAll('.tab-titles li');
    tabTitles.forEach(tab => {
      tab.classList.remove('active');
    });
  
    // Mostrar la pestaña seleccionada
    document.getElementById(tabName).classList.add('active');
  
    // Añadir la clase activa al título de la pestaña seleccionada
    evt.currentTarget.classList.add('active');
  }
  