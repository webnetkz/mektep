<?php



    $style = 'style';
    $styleTwo = 'style';
    $styleThree = 'style';
    $title = 'Mektep';
    
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
        <link rel="icon" type="image/ico" href="/public/img/logoIco.ico">
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
    <script>
        if(window.innerWidth <= 1000) {
            document.body.innerHTML += '<img src="public/img/miniBgImg/1.jpg" class="bgImg" id="bg7" alt="bg images"><img src="public/img/miniBgImg/2.jpg" class="bgImg" id="bg1" alt="bg images"><img src="public/img/miniBgImg/3.jpg" class="bgImg" id="bg2" alt="bg images"><img src="public/img/miniBgImg/1.jpg" class="bgImg" id="bg3" alt="bg images"><img src="public/img/miniBgImg/2.jpg" class="bgImg" id="bg4" alt="bg images"><img src="public/img/miniBgImg/3.jpg" class="bgImg" id="bg5" alt="bg images"><img src="public/img/miniBgImg/1.jpg" class="bgImg" id="bg6" alt="bg images">';
        } else {
            document.body.innerHTML += '<img src="public/img/bgImg/1.jpg" class="bgImg" id="bg7" alt="bg images"><img src="public/img/bgImg/2.jpg" class="bgImg" id="bg1" alt="bg images"><img src="public/img/bgImg/3.jpg" class="bgImg" id="bg2" alt="bg images"><img src="public/img/bgImg/1.jpg" class="bgImg" id="bg3" alt="bg images"><img src="public/img/bgImg/2.jpg" class="bgImg" id="bg4" alt="bg images"><img src="public/img/bgImg/3.jpg" class="bgImg" id="bg5" alt="bg images"><img src="public/img/bgImg/1.jpg" class="bgImg" id="bg6" alt="bg images">';
        }
    </script>
    <?php
        require_once 'public/components/signModal.php';
        require_once 'public/components/header.php';
    ?>
    <style>
        body {
            overflow: hidden;
        }
    </style>
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
