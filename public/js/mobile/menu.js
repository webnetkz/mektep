// Отображение меню на мобильной версии
let menuBurger = document.querySelector('.menuBurger');
menuBurger.onclick = () => {

    if(menuBurger.name == 'showMenu') {
        menuBurger.name = 'hideMenu';
        let menuHeader = document.querySelector('.menuHeader');
        menuHeader.style.top = '-140vh';
    } else {
        menuBurger.name = 'showMenu';
        let menuHeader = document.querySelector('.menuHeader');
        menuHeader.style.top = '0px';
    }
}