// Get elements
const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');

// Toggle navigation visibility
menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('show');
});

const form = document.getElementById('contact-form');

form.addEventListener('submit', function(event) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (!name || !email || !message) {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});
