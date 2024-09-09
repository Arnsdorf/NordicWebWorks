let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
        // Scroller ned, skjul navbar
        navbar.classList.add('hidden');
    } else {
        // Scroller op, vis navbar
        navbar.classList.remove('hidden');
    }

    lastScrollTop = scrollTop;
});

document.querySelector('.navbar-toggler').addEventListener('click', function() {
    this.classList.toggle('collapsed');
});
