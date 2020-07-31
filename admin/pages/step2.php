<?php

?>
    <select name="level" id="level" class="sel">
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
    <select name="subject" id="subject" class="sel">
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
    <select name="lang" id="lang" class="sel">
        <option value="" disabled selected>Язык</option>
        <option value="kz">Казахский</option>
        <option value="ru">Русский</option>
    </select>
    <br>
    <select name="pack" id="pack" class="sel">
        <option value="" disabled selected>Пакет</option>
        <option value="teach">Для учителя</option>
        <option value="user">Для ученика</option>
    </select>
    <br>
    <input type="submit" class="btn" value="Сохранить" onclick="createBook()" name="saveBook">
<script>
    // Создание книги
function createBook() {
    let xhr = new XMLHttpRequest();

    let invoice = document.querySelector('[name=]');
    let content = document.querySelector('.container');


    xhr.open('GET', '/app/querys/getAllDocs.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {

            let resultQuery = xhr.responseText;
            // Разбить строку, разделителем ',' на элементы массива
            resultQuery = resultQuery.split(',');
            component.innerHTML += '<h2>Счета на оплату</h2><p class="docItem" style="border-radius: 5px; background: rgb(77, 77, 77);"><span class="docTableItem">Номер</span><span class="docTableItem">Дата</span><span class="docTableItem">Контрагент</span></p>';
            for(let i = 0; i < resultQuery.length && i != resultQuery.length -1; i++) {
                component.innerHTML += '<a href="app/layoutsOfDocs/invoice.php?doc='+(i+1)+'" class="docItemLink"><p class="docItem">'+resultQuery[i]+'</p></a>';
            }
        }
    }
    xhr.send();
}

getAllInvoice();
getAllAct();
getAllwaybill();
</script>