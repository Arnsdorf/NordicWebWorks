document.getElementById('scroll-down').addEventListener('click', function () {
    // Get all sections in the document
    const sections = document.querySelectorAll('section');

    // Get the current scroll position
    const currentScrollPosition = window.pageYOffset;

    // Loop through sections and find the next section below the current scroll position
    for (let i = 0; i < sections.length; i++) {
        const sectionTop = sections[i].offsetTop;

        // Check if the section is below the current scroll position
        if (sectionTop > currentScrollPosition) {
            // Scroll to the next section
            window.scrollTo({
                top: sectionTop,
                behavior: 'smooth' // Enable smooth scrolling
            });
            break; // Stop once the next section is found
        }
    }
});