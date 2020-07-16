window.addEventListener('scroll', () => {
    if(pageYOffset > 50) {
        document.querySelector('header').style.backgroundColor = 'rgb(12, 77, 162)';
        let menuItem = document.querySelectorAll('.menuItem');
        for(let i = 0; i < menuItem.length; i++) {
            menuItem[i].style.color = 'rgb(255, 255, 255)';
        }
        document.querySelector('.logoLink').style.backgroundColor = 'rgb(255, 255, 255)';
    } else {
        document.querySelector('header').style.backgroundColor = 'rgb(255, 255, 255)';
        let menuItem = document.querySelectorAll('.menuItem');
        for(let i = 0; i < menuItem.length; i++) {
            menuItem[i].style.color = 'rgb(12, 77, 162)';
        }
        document.querySelector('.logoLink').style.backgroundColor = 'rgb(255, 255, 255)';
    }
});