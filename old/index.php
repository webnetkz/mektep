<?php

    @session_start();

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../index"</script>';
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <span class="step activeStep" id="step1" onclick="focusTab(this)">Панель</span>
        <!--
                    <span class="step" id="step2" onclick="focusTab(this)">Данные</span>
        <span class="step" id="step3" onclick="focusTab(this)">Содержание</span>
        <span class="step" id="step4" onclick="focusTab(this)">Контент</span>
        <span class="step" id="step5" onclick="focusTab(this)">Тесты</span>
-->
    </header>
    <section id="#content">
        <div class="content showContent step1">
            <?php
                require_once 'pages/step1.php';
            ?>
        </div>
        <div class="content step2">
            <?php
                require_once 'pages/step2.php';
            ?>
        </div>
        <div class="content step3">
            <?php
                require_once 'pages/step3.php';
            ?>
            </div>
        <div class="content step4">
            <?php
                require_once 'pages/step4.php';
            ?>
        </div>
        <div class="content step5">
            <?php
                require_once 'pages/step5.php';
            ?>
        </div>
    </section>

<script>
    // Tabs
    function focusTab(elem) {

        // Находим активную вкладку и дизактивируем
        let activeTab = document.querySelector('.activeStep');
        if(activeTab) {
            activeTab.classList.remove('activeStep');
        }

        // Активируем вкладку при клике
        if(elem.classList.value != 'activeStep') {
            elem.classList.add('activeStep');
        }

        // Находим отображаемый контент и скрываем
        let tabAllContent = document.querySelector('.showContent');
        if(tabAllContent) {
            tabAllContent.classList.remove('showContent');
        }

        // Отображаем контент активной вкладки
        let tabContent = document.querySelector('.'+elem.id);
        tabContent.classList.add('showContent');
    }
</script>
</body>
</html>