var menuIcon = document.querySelector('.openMenu');
var dropdownMenu = document.querySelector('.navigation');
var wpMenu = document.querySelector('#menu-nav');

menuIcon.addEventListener('click', openMenu
);

function openMenu() {
    if (dropdownMenu.classList.contains('hideNav')) {
        dropdownMenu.classList.remove('hideNav');
        dropdownMenu.classList.add('showNav');
        wpMenu.dropdownMenu.classList.add('showNav');
    }
    else {
        dropdownMenu.classList.remove('showNav');
        wpMenu.dropdownMenu.classList.remove('showNav');
        dropdownMenu.classList.add('hideNav');
        wpMenu.dropdownMenu.classList.add('hideNav');
    }
}