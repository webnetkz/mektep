<footer>
    <img src="public/img/logoRu.webp" alt="Логотип издательства Мектеп" class="logoFooter">
    <menu class="menuFooter">
        <a href="index" class="menuItemF">
            <?=$home?>
        </a>
        <a href="library" class="menuItemF">
            <?=$lib?>
        </a>
        <a href="contacts" class="menuItemF">
            <?=$contacts?>
        </a>
        <a href="#" class="menuItemF">
            <?=$door?>
        </a>
    </menu>
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
    
</footer>
<script src="public/js/headerEffect.js"></script>