document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('scroll', function () {
        const sections = [
            { id: 'frontpage', link: document.querySelector('#frontpage-link') },
            { id: 'services', link: document.querySelector('#service-link') },
            { id: 'cases', link: document.querySelector('#cases-link') }
        ];

        sections.forEach(section => {
            const sectionElement = document.getElementById(section.id);

            if (sectionElement) {
                const rect = sectionElement.getBoundingClientRect();

                if (rect.top >= 0 && rect.top <= window.innerHeight / 2) {
                    section.link.classList.add('active');
                } else {
                    section.link.classList.remove('active');
                }
            }
        });
    });
});
