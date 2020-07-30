<?php

?>
<p>
    <button class="btn" onclick="appendNewData(this)">Новая книга</button>
</p>
<script>
    function appendNewData(elem) {
        elem.style.display = 'none';
        
        document.querySelector('header').innerHTML = '<span class="step" id="step1" onclick="focusTab(this)">Панель</span>   <span class="step activeStep" id="step2" onclick="focusTab(this)">Данные</span>';
        
        // Находим отображаемый контент и скрываем
        let tabAllContent = document.querySelector('.showContent');
        if(tabAllContent) {
            tabAllContent.classList.remove('showContent');
        }

        document.querySelector('.step2').classList.add('showContent');
    }
</script>