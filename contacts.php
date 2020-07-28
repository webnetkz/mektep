<?php

    $style = 'footer';
    $styleTwo = 'contacts';
    $styleThree = 'style';

    require_once 'public/components/header.php';
    
?>
    <section id="content">
        <?php
            require_once 'public/components/contacts.php';
        ?>
        <?php
            require_once 'public/components/footer.php';
        ?>
    </section>
    
</body>
</html>