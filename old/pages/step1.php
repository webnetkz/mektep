<?php

?>
<p>
    <button class="btn" onclick="appendNewData(this)">Новая книга</button>
</p>
<script>

    // Отображение второго шага
    function appendNewData(elem) {
        
        // Скрытие кнопки создание новой книги
        elem.style.display = 'none';
        // Добовление не рабочей кнопки вместо скрытой
        document.querySelector('.step1').innerHTML += '<button class="btn" onclick="return false">Создается новая книга</button>';
        
        // Добовление меню в шапку сайта
        document.querySelector('header').innerHTML = '<span class="step" id="step1" onclick="focusTab(this)">Панель</span>   <span class="step activeStep" id="step2" onclick="focusTab(this)">Данные</span>';
        
        // Находим отображаемый контент и скрываем его
        let tabAllContent = document.querySelector('.showContent');
        if(tabAllContent) {
            tabAllContent.classList.remove('showContent');
        }

        // Отображаем необходимый контент
        document.querySelector('.step2').classList.add('showContent');
    }
</script>