const marquee = document.querySelector('.marquee');
const partners = document.querySelector('.partners');
const partnerCards = document.querySelectorAll('.partners_card');


partnerCards.forEach(card => {
    const clone = card.cloneNode(true);
    partners.appendChild(clone);
});

const cardWidth = partnerCards[0].clientWidth;
const totalCards = partnerCards.length * 2; 
const marqueeWidth = cardWidth * totalCards;

marquee.style.width = `${marqueeWidth}px`;

let scrollSpeed = 0.8; 
let scrollAmount = 0; 

function scrollMarquee() {
    scrollAmount += scrollSpeed;

    if (scrollAmount >= marqueeWidth / 2) {
        scrollAmount = 0; 
    }

    marquee.style.transform = `translateX(-${scrollAmount}px)`;

    requestAnimationFrame(scrollMarquee);
}

scrollMarquee();
