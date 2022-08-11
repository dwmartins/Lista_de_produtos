var openMenu = document.querySelector('.open_menu');
var menu = document.querySelector('.menu');

openMenu.addEventListener('click', function() {
    menu.classList.toggle('menu_aberto');
    console.log('Aberto')
})