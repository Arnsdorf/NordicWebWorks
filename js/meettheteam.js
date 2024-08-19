document.addEventListener('DOMContentLoaded', function() {
    const containers = document.querySelectorAll('.image-container');

    containers.forEach(container => {
        const images = JSON.parse(container.getAttribute('data-images'));
        let index = 0;
        let intervalId;

        container.addEventListener('mouseenter', () => {
            intervalId = setInterval(() => {
                index = (index + 1) % images.length;
                const img = container.querySelector('img');
                img.src = images[index];
            }, 1300); // Skift billede hver 3. sekund
        });

        container.addEventListener('mouseleave', () => {
            clearInterval(intervalId); // Stop intervallet
            index = 0; // Nulstil index til det første billede
            const img = container.querySelector('img');
            img.src = images[index]; // Skift tilbage til det første billede
        });
    });
});
