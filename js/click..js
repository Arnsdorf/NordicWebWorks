document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('click', function() {
        // Reset all cards to default positions and scales
        document.querySelectorAll('.project-card').forEach(otherCard => {
            otherCard.classList.remove('active');
            // Update these properties based on your desired inactive state
            otherCard.style.opacity = '0.5';
            otherCard.style.transform = 'scale(0.8)';
            otherCard.querySelector('.project-info').style.display = 'none';
        });

        // Set the clicked card as active with different properties
        this.classList.add('active');
        this.style.opacity = '1';
        this.style.transform = 'scale(1)';
        this.querySelector('.project-info').style.display = 'block';

        // Reorder cards based on the active card
        reorderCards(this.id);
    });
});

function reorderCards(activeId) {
    // You can adjust the percentages here based on how you want the cards to spread
    const positions = {
        'project1': { 'project1': '25%', 'project2': '40%', 'project3': '10%' },
        'project2': { 'project1': '10%', 'project2': '25%', 'project3': '40%' },
        'project3': { 'project1': '40%', 'project2': '10%', 'project3': '25%' }
    };
    // Set positions based on the active card
    document.getElementById('project1').style.left = positions[activeId]['project1'];
    document.getElementById('project2').style.left = positions[activeId]['project2'];
    document.getElementById('project3').style.left = positions[activeId]['project3'];
}
