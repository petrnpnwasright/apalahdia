// Toggle class active

const navbarNav = document.querySelector('.navbar_nav');

// klik hamburger menu
document.querySelector('#menu').onclick = () => {
    navbarNav.classList.toggle('active');

};


// Klik luar sidebar

const hamburger = document.querySelector('#menu');

document.addEventListener('click', function(e) {
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
})

