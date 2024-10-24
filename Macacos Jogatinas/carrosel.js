let currentIndices = {};

function moveCarousel(direction, category) {
    const track = document.querySelector(`.${category} .carousel-track`);
    const cards = track.querySelectorAll('.series-card');
    const totalCards = cards.length;
    
    if (!currentIndices[category]) {
        currentIndices[category] = 0;
    }

    currentIndices[category] += direction;

    if (currentIndices[category] < 0) {
        currentIndices[category] = totalCards - 1;
    } else if (currentIndices[category] >= totalCards) {
        currentIndices[category] = 0; 
    }

    const offset = -currentIndices[category] * (300 + 20);
    track.style.transform = `translateX(${offset}px)`;
}
