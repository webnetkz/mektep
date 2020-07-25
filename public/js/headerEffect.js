// Эффект при скроле страницы для header
window.addEventListener('scroll', () => {
    if(pageYOffset > 50) {
        document.querySelector('.menuBurger').src = 'public/img/icons/menuWhite.png';

        let headerBlock = document.querySelector('header');
        headerBlock.style.backgroundColor = 'rgb(12, 77, 162)';
        headerBlock.style.height = '50px';
        
        let menuItem = document.querySelectorAll('.menuItem');
        document.querySelector('.logoLink').style.backgroundColor = 'rgb(255, 255, 255)';
        
        let logoHeader = document.querySelector('.logoHeader');
        logoHeader.style.height = '35px';
        logoHeader.style.padding = '4px';

        for(let i = 0; i < menuItem.length; i++) {
            if(window.innerWidth > 1000) {
                menuItem[i].style.color = 'rgb(255, 255, 255)';
            }  
        }
    } else {
        document.querySelector('.menuBurger').src = 'public/img/icons/menu.png';

        let headerBlock = document.querySelector('header');
        headerBlock.style.backgroundColor = 'rgb(255, 255, 255)';
        headerBlock.style.height = '100px';
        
        let menuItem = document.querySelectorAll('.menuItem');
        document.querySelector('.logoLink').style.backgroundColor = 'rgb(255, 255, 255)';
        document.querySelector('.logoHeader').style.height = '70px';
        
        let logoHeader = document.querySelector('.logoHeader');
        logoHeader.style.height = '70px';
        logoHeader.style.padding = '7px';

        for(let i = 0; i < menuItem.length; i++) {
            if(window.innerWidth > 1000) {
                menuItem[i].style.color = 'rgb(12, 77, 162)';
            }  
        }
    }
});

