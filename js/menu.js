const header = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const scrollPos = window.scrollY;
    if (scrollPos > 10 ) {
        header.classList.add('scrolled','shadow','navbarbg');
    }
    else {
        header.classList.remove('scrolled','shadow','navbarbg');
    }
});

