document.querySelector('.background-container').addEventListener('mousemove', function(e) {
    const grid = document.querySelector('.net-grid');
    const rect = grid.getBoundingClientRect();

    // Calculate the position of the mouse relative to the grid
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    // Adjust the clipping path based on mouse position
    grid.style.clipPath = `circle(100px at ${x}px ${y}px)`;
});

document.querySelector('.background-container').addEventListener('mouseleave', function() {
    // Reset the clipping path when the mouse leaves
    const grid = document.querySelector('.net-grid');
    grid.style.clipPath = 'inset(100%)'; // Ensure it fully hides
});
