<?php

    // Подключение файла с языками
    require_once 'public/langs/lang.php';

?>
    <header>
        <img src="public/img/icons/menu.png" alt="burger menu" class="menuBurger">
        <a href="index" class="logoLink">
            <img src="public/img/<?=$logo?>.webp" alt="логотип издательства Мектеп" class="logoHeader">
        </a>
        <menu class="menuHeader">
            <a href="index?lang=<?=$lang?>" class="menuItem">
                <?=$home?>
            </a>
            <a href="library?lang=<?=$lang?>" class="menuItem">
                <?=$lib?>
            </a>
            <a href="contacts?lang=<?=$lang?>" class="menuItem">
                <?=$contacts?>
            </a>
            <span onclick="getSignModal()" class="menuItem">
                <?=$door?>
            </span>
        </menu>
        <div class="language">
            <span class="lang" onclick="location.href = '?lang=<?=$newLang?>'">
                <?php
                    
                    // Отображение противоположного текущему языку
                    if($lang == 'kz') {
                        echo 'рус';
                    } else {
                        echo 'қаз';
                    }
					
                ?>
            </span>
        </div>
    </header>
    <script src="public/js/mobile/menu.js"></script>