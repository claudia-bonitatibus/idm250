var menuIcon = document.querySelector('.openMenu');
var dropdownMenu = document.querySelector('.navigation');

menuIcon.addEventListener('click', openMenu
);

function openMenu() {
    if (dropdownMenu.classList.contains('hideNav')) {
        dropdownMenu.classList.remove('hideNav');
        dropdownMenu.classList.add('showNav');
    }
    else {
        dropdownMenu.classList.remove('showNav');
        dropdownMenu.classList.add('hideNav');
    }
}