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
        <img src="public/img/bgImg/13.webp" class="bgImg" id="bg7">
        <img src="public/img/bgImg/1.webp" class="bgImg" id="bg1">
        <img src="public/img/bgImg/3.webp" class="bgImg" id="bg2">
        <img src="public/img/bgImg/5.webp" class="bgImg" id="bg3">
        <img src="public/img/bgImg/6.webp" class="bgImg" id="bg4">
        <img src="public/img/bgImg/11.webp" class="bgImg" id="bg5">
        <img src="public/img/bgImg/12.webp" class="bgImg" id="bg6">
    <div style="text-align: center;">
        <h1 class="indexHeader"><?=$indexHeader?></h1>
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
    <script>
        // Анимация смена фонового изображения
        setInterval(() => {
            let bgImg = document.querySelector('#bg6');
            bgImg.style.opacity = "0";
        }, 5000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg5');
            bgImg.style.opacity = "0";
        }, 10000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg4');
            bgImg.style.opacity = "0";
        }, 15000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg3');
            bgImg.style.opacity = "0";
        }, 25000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg2');
            bgImg.style.opacity = "0";
        }, 30000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg1');
            bgImg.style.opacity = "0";
        }, 35000);
        setInterval(() => {
            let bgImg = document.querySelector('#bg7');
            bgImg.style.opacity = "0";
            let repeatBg = document.querySelector('#bg1');
            bgImg.style.opacity = "1";
        }, 40000);
    </script>
</body>
</html>