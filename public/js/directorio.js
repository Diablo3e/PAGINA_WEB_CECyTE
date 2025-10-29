const extCards = document.querySelectorAll('.flip-card');

document.addEventListener('DOMContentLoaded', () => {
    extCards.forEach(card => {
            card.addEventListener('click', () => {
                flipAllCards(extCards);
                card.classList.toggle('flipped');
            });
        }); 
});

function flipAllCards(cards){
    cards.forEach( card => {
        card.classList.remove('flipped');
    });
}
