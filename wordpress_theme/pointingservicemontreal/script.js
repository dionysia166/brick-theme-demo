// Navbar scroll effect
function updateNavBackground() {
    var nav = document.getElementById('navbar');
    if (window.pageYOffset > 90) {
        nav.style.backgroundColor = 'black';
    } else {
        nav.style.backgroundColor = 'transparent';
    }
}

window.onscroll = updateNavBackground;
updateNavBackground();


// Add click event listeners to each header
function toggleAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const item = this.parentElement;
            item.classList.toggle('active');
        });
    });
}

toggleAccordion();
