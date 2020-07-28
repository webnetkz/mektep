<?php

    @session_start();

    require_once 'core/models/language.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="WebNet">
    <meta name="description" content="<?=$title?>">
    <meta name="keywords" content="<?=$title?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="public/json/manifest.json">
    <!--------| START STYLES |-------->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="icon" type="image/webp" href="/public/img/logoRu.webp">
        <link rel="stylesheet" href="public/css/<?=$style?>.css">
        <link rel="stylesheet" href="public/css/<?=$styleTwo?>.css">
        <link rel="stylesheet" href="public/css/<?=$styleThree?>.css">
        <link rel="apple-touch-icon" href="/public/img/logoRu.webp">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <meta name="theme-color" content="rgb(27, 77, 162)">
    <!--------| END STYLES |-------->
    <title>
        <?=$title?>
    </title>
</head>
<body>
    <header>
        <a href="index" class="logoLink">
            <img src="public/img/<?=$logo?>.webp" alt="логотип издательства Мектеп" class="logoHeader">
        </a>
        <img src="public/img/icons/menu.png" alt="burger menu" class="menuBurger">
        <div class="language">
            <span class="lang" onclick="location.href = '?lang=<?=$newLang?>'">
                <?php

                    if($_SESSION['lang'] == 'kz') {
                        echo 'рус';
                    } else {
                        echo 'қаз';
                    }
					
                ?>
            </span>
        </div>
        <menu class="menuHeader">

            <?php

                if($lang == 'ru') {
                    echo '<a href="index" class="menuItem">
                        Главная
                    </a>
                    <a href="library" class="menuItem">
                        Библиотека
                    </a>
                    <a href="contacts" class="menuItem">
                        Контакты
                    </a>
                    <a href="#" class="menuItem">
                        Войти
                    </a>';
                } else {
                    echo '<a href="index" class="menuItem">
                        Главная
                    </a>
                    <a href="library" class="menuItem">
                        Кітапхана
                    </a>
                    <a href="contacts" class="menuItem">
                        Контакты
                    </a>
                    <a href="#" class="menuItem">
                        Войти
                    </a>';
                }

            ?>

        </menu>
    </header>
    <script>
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
                menuHeader.style.top = '50px';
            }
        }
    </script>