import { slugify } from "./slug.js";

document.addEventListener('DOMContentLoaded', function () {
    addFilterToSelect('filterSelectPlanEstudio');
    addFilterToSelect('filterSelectHorario');
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
