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
        <span class="step activeStep" name="step1" onclick="focusTab(this)">Панель</span>
        <span class="step" name="step2" onclick="focusTab(this)">Этап 1</span>
        <span class="step" name="step3" onclick="focusTab(this)">Этап 2</span>
        <span class="step" name="step4" onclick="focusTab(this)">Этап 3</span>
        <span class="step" name="step5" onclick="focusTab(this)">Этап 4</span>
    </header>
    <section id="#content">
        <div class="content showContent" id="step1">tabContent1</div>
        <div class="content" id="step2">tabContent2</div>
        <div class="content" id="step3">tabContent3</div>
        <div class="content" id="step4">tabContent4</div>
        <div class="content" id="step5">tabContent5</div>
    </section>

<script>
    // Tabs
    function focusTab(elem) {
        console.log(elem);
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
        let tabContent = document.getElementById(elem.name);
        tabContent.classList.add('showContent');
    }
</script>
</body>
</html>