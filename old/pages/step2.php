<?php



?>
<form name="formS2" enctype="multipart/form-data" method="POST">
    <select name="level" id="level" class="sel" required>
        <option value="" disabled selected>Класс</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
    </select>
    <br>
    <select name="subject" id="subject" class="sel" required>
        <option value="" disabled selected>Предмет</option>
        <option value="Алгебра">Алгебра</option>
        <option value="Әдебиеттік оқ">Әдебиеттік оқу</option>
        <option value="Бастауыш">Бастауыш</option>
        <option value="Биология">Биология</option>
        <option value="География">География</option>
        <option value="Геометрия">Геометрия</option>
        <option value="Дүниежүзі тарихы">Дүниежүзі тарихы</option>
        <option value="Дүниетану">Дүниетану</option>
        <option value="Жаратылыстану">Жаратылыстану</option>
        <option value="Информатика">Информатика</option>
        <option value="Көркем еңбек">Көркем еңбек</option>
        <option value="Қазақ әдебиеті">Қазақ әдебиеті</option>
        <option value="Қазақ тілі">Қазақ тілі</option>
        <option value="Қазақстан тарихы">Қазақстан тарихы</option>
        <option value="Математика">Математика</option>
        <option value="Музыка">Музыка</option>
        <option value="Сауат ашу">Сауат ашу</option>
        <option value="Физика">Физика</option>
        <option value="Познание мира">Познание мира</option>
        <option value="Русская литература">Русская литература</option>
        <option value="Художественный труд">Художественный труд</option>
    </select>
    <br>
    <select name="lang" id="lang" class="sel" required>
        <option value="" disabled selected>Язык</option>
        <option value="kz">Казахский</option>
        <option value="ru">Русский</option>
    </select>
    <br>
    <select name="pack" id="pack" class="sel" required>
        <option value="" disabled selected>Пакет</option>
        <option value="teach">Для учителя</option>
        <option value="user">Для ученика</option>
    </select>
    <br>
    <input type="file" class="sel" name="titleImg" required>
    <br>
<input type="submit" class="btn" value="Сохранить" name="saveBook" onclick="changeBtn('#step2')">
</form>
<script>
    // Изменение активности кнопки
    function changeBtn(elem) { 
        let activeStepBtn = document.querySelector(elem);
        activeStepBtn.classList.add('completeStep');
    }

    // Устанавливаем обработчик отправки формы
    document.forms.formS2.onsubmit = function (e) {
        // Отключить стандартное поведение формы
        e.preventDefault();
        // Получаем значение с input
        let level = document.forms.formS2.level.value;
        let subject = document.forms.formS2.subject.value;
        let lang = document.forms.formS2.lang.value;
        let pack = document.forms.formS2.pack.value;
        let titleImg = document.forms.formS2.titleImg.value;

        // Создание объекта
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'core/queries/appendBookStep2');
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');

        // Обработка запроса на сервер
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                //res.textContent = xhr.responseText;
                document.querySelector('header').innerHTML = '<span class="step" id="step1" onclick="focusTab(this)">Панель</span>   <span class="step completeStep" id="step2" onclick="focusTab(this)">Данные</span>  <span class="step activeStep" id="step3" onclick="focusTab(this)">Содержание</span>'
            
                // Находим отображаемый контент и скрываем его
                let tabAllContent = document.querySelector('.showContent');
                if(tabAllContent) {
                    tabAllContent.classList.remove('showContent');
                }

                // Отображаем необходимый контент
                document.querySelector('.step3').classList.add('showContent');
            }
        }

        // Отправка запроса на сервер
        xhr.send('level=' + level + '&subject=' + subject + '&lang=' + lang +'&pack=' + pack + '&titleImg' + titleImg);

    };


    /*function x() {
        let userData = document.forms.myForm.inp.value;

        userData = encodeURIComponent(userData);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'form.php');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                res.textContent = xhr.responseText;
            }
        }

        xhr.send('inp=' + userData);
    }*/
</script>
