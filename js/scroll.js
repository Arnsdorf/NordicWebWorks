let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const elements = document.querySelectorAll('.scroll-animate');
    const currentScrollY = window.scrollY;
    const scrollDifference = currentScrollY - lastScrollY;

    elements.forEach((element, index) => {
        // Add a random factor for each element
        const randomFactor = (Math.random() * 0.9) + 1; // Generates a random number between 0.9 and 1.3
        let translateY = scrollDifference * 0.6 * randomFactor;

        // Apply the translation
        element.style.transform = `translateY(${translateY}px)`;
    });

    lastScrollY = currentScrollY;
});

// Optional: Reset transform after scrolling stops
let scrollTimeout;
window.addEventListener('scroll', () => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        document.querySelectorAll('.scroll-animate').forEach(element => {
            element.style.transform = 'translateY(0)';
        });
    }, 200);
});
