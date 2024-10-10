// Toggle mobile menu
document.getElementById('nav-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});

function toggleDetails(event) {
    const detailsElements = document.querySelectorAll('details');

    detailsElements.forEach((details) => {
        if (details !== event.currentTarget && details.open) {
            details.removeAttribute('open'); // Close other open details
        }
    });
}
