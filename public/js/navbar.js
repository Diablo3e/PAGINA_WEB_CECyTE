document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById("hamburger");
    const navbar = document.getElementById("navbar");
    const dropdown = document.getElementById('dropdown');

    // Mostrar/ocultar menú hamburguesa
    if (hamburger && navbar) {
        hamburger.addEventListener("click", function() {
            navbar.classList.toggle("active");
        });
    }

    // Mostrar el submenú en pantallas pequeñas
    if (dropdown) {
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation(); // Evitar propagación
            this.classList.toggle('active');
        });

        // Cerrar el submenú si se hace clic fuera
        window.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
    }
});
function toggleSearchBar() {
    const searchBar = document.getElementById('search-bar');
    searchBar.classList.toggle('show');
}
