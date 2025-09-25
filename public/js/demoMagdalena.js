import { slugify } from "./slug.js";

document.addEventListener('DOMContentLoaded', function () {
    addFilterToSelect('filterSelectPlanEstudio');
    addResetListenerToAccordion('planesEstudio');
    addFilterToSelect('filterSelectHorario');
    addResetListenerToAccordion('horarios');
    addImagesExpandListener(document.getElementById('instalaciones-content'));
});

function addFilterToSelect(selectID){
    document.getElementById(selectID).addEventListener('change', function () {
        let filterValue = slugify(this.value);
        let cards = document.getElementById(selectID).parentElement.querySelectorAll('.responsive-card');

        cards.forEach(card => {
            let cardName = slugify(card.querySelector('.card-title').textContent);

            if (filterValue === 'all' || cardName.includes(filterValue)) {
                card.style.display = 'block'; // show
            } else {
                card.style.display = 'none'; // hide
            }
        });
    });
}

function addResetListenerToAccordion(accordionID){
    const accordion = document.getElementById(accordionID)
    accordion.addEventListener("hidden.bs.collapse", () => {
        //Reset acordion
        const select = accordion.
            querySelector('.accordion-body').
            querySelector('.card-flex').
            querySelector('select');
        select.value = 0;

        //Ocultar opciones
        const cards = accordion.
            querySelector('.accordion-body').
            querySelector('.card-flex').
            querySelectorAll('.responsive-card');
        cards.forEach(card => {
            card.style.display = 'none';
        });
    });
}

function addImagesExpandListener(instalacionesContent){
    const imagenesBtns = instalacionesContent.querySelectorAll('.btnExpandirImagen');
    imagenesBtns.forEach(imagenBtn => {
        imagenBtn.addEventListener('click', () => {
            const imgElement = imagenBtn.querySelector('img');
            setModalImage(imgElement.src);
        });
    });
}

function setModalImage(img){
    const imagenDiv = document.getElementById('imagenesModal')
                                .querySelector('.modal-dialog')
                                .querySelector('.modal-content')
                                .querySelector('.modal-body');
    imagenDiv.innerHTML = `<img class="img-fluid" src="${img}" alt="imagen instalaciones">`

}