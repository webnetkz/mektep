<footer>
    <img src="public/img/logoRu.webp" alt="Логотип издательства Мектеп" class="logoFooter">
    <menu class="menuFooter">
        <a href="index?lang=<?=$lang?>" class="menuItemF">
            <?=$home?>
        </a>
        <a href="library?lang=<?=$lang?>" class="menuItemF">
            <?=$lib?>
        </a>
        <a href="contacts?lang=<?=$lang?>" class="menuItemF">
            <?=$contacts?>
        </a>
    </menu>
    <div class="language">
            <span class="lang" onclick="location.href = '?lang=<?=$newLang?>'">
                <?php

                    if($lang == 'kz') {
                        echo 'рус';
                    } else {
                        echo 'қаз';
                    }
					
                ?>
            </span>
        </div>
    
</footer>
<script src="public/js/headerEffect.js"></script>