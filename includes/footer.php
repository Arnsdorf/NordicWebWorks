<script>
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

</script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>