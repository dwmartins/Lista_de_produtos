var openMenu = document.querySelector('.open_menu');
var btnOpenMenu = document.querySelector('.btn-open-menu');
var menu = document.querySelector('.menu');

openMenu.addEventListener('click', function() {
    menu.classList.toggle('menu_aberto');
    btnOpenMenu.classList.toggle('rotateBtn');
})