// nav
const iconBurger = document.getElementById('iconBurger');
const menu = document.getElementById('menu');

iconBurger.addEventListener('click', function () {
    menu.classList.toggle('open');
});

// nav menu

const links = document.getElementsByClassName('links');
const linkMenu = document.getElementsByClassName('link-menu');
const linkMenuClose = document.getElementsByClassName('link-menu-close');

const closeMenu = () => {
    for (let i = 0; i < links.length; i++) {
        links[i].classList.remove('open');
    };
}

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('mouseover', () => {
        closeMenu();
        links[i].classList.add('open');
    });

    links[i].addEventListener('click', (e) => {
        if (window.innerWidth <= 800) {
            e.preventDefault();
            closeMenu();
            links[i].classList.add('open');
        }
    });

    linkMenuClose[i].addEventListener('click', (e) => {
        e.stopPropagation();
        closeMenu();
    });
}
menu.addEventListener('mouseleave', closeMenu);

// nav search box

const searchTarget = document.getElementById('search-target');
const searchClose = document.getElementById('search-close');
const searchBox = document.getElementById('search-box');
const searchInput = document.getElementById('search-input');

searchTarget.addEventListener('click', () => {
    searchBox.classList.add('active');
    searchInput.focus();
});

searchClose.addEventListener('click', () => {
    searchBox.classList.remove('active');
});

// nav cart

const cartBtn = document.getElementById('cart-btn');
const cart = document.getElementById('cart');
const cartClose = document.getElementById('cart-close');

cartBtn.addEventListener('click', () => {
    cart.classList.toggle('open');
});

cartClose.addEventListener('click', () => {
    cart.classList.toggle('open');
});



window.addEventListener('scroll', () => {
    closeMenu();
    menu.classList.remove('open');
    searchBox.classList.remove('active');
    cart.classList.remove('open');
});