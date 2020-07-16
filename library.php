<?php

    $title = 'Библиотека Мектеп';
    $lang = 'ru';
    $logo = 'logoRu';
    $style = 'searchBar';
    $styleTwo = 'footer';
    $styleThree = 'library';

    require_once 'public/components/header.php';
    
?>

    <section id="content">
        <?php
            require_once 'public/components/searchBar.php';
        ?>
        <?php
            require_once 'public/components/library.php';
        ?>
        <?php
            require_once 'public/components/footer.php';
        ?>
    </section>
    

</body>
</html>