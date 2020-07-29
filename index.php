<?php

    $style = 'style';
    $styleTwo = 'style';
    $styleThree = 'style';
    require_once 'public/components/header.php';

?>
    <style>
        body {
            overflow: hidden;
        }
    </style>
    <div id="bgImg"></div>
    <h1 class="indexHeader"><?=$indexHeader?></h1>
    <div style="text-align: center;">
        <a href="library" class="linkBtn"><?=$lib?></a>
    </div>
    <script>
        // Регистрация сервисного работника
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
            navigator.serviceWorker.register('service-worker.js')
            .then((reg) => {
            //console.log('Сервисный работник зарегистрирован.', reg);
            });
        });}
	</script>
</body>
</html>