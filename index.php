<?php

    require_once 'public/components/header.php';

?>
    <script>
        // Регистрация сервисного работника
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
            navigator.serviceWorker.register('service-worker.js')
            .then((reg) => {
            //console.log('Сервисный работник зарегистрирован.', reg);
            });
        });}
        // Возможность добавить на главный экран приложение для IOS Safari
        const isIos = () => {
            const userAgent = window.navigator.userAgent.toLowerCase();
            return /iphone|ipad|ipod/.test( userAgent );
        };
        // Проверяем, открыто ли приложение отдельно или в браузере
         const isInStandaloneMode = () => ('standalone' in window.navigator) && (window.navigator.standalone);
        // Если приложение открыто на iOS и в браузере, то предлагаем установить
        if (isIos() && !isInStandaloneMode()) {
            //this.setState({ isShown: true }); // На примере React
            console.log(isIos());
        }
	</script>
</body>
</html>