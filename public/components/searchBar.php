<section id="searchBar">
    <form action="#" method="GET" id="searchForm">
        <select name="" class="searchInp">
            <?php
                if($lang == 'ru') {
                    echo '<option selected disabled>Класс</option>';
                } else {
                    echo '<option selected disabled>Сынып</option>';
                }
            ?>
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
        <select name="" class="searchInp">
            <?php
                if($lang == 'ru') {
                    echo '<option selected disabled>Предмет</option>
                    <option value="Биология">Биология</option>
                    <option value="География">География</option>
                    <option value="Геометрия">Геометрия</option>
                    <option value="Информатика">Информатика</option>
                    <option value="Математика">Математика</option>
                    <option value="Музыка">Музыка</option>
                    <option value="Познание мира">Познание мира</option>
                    <option value="Русская литература">Русская литература</option>
                    <option value="Физика">Физика</option>
                    <option value="Художественный труд">Художественный труд</option>';
                } else {
                    echo '<option selected disabled>Пән</option>
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
                    <option value="Физика">Физика</option>';
                }
            ?>
        </select>
        <select name="" class="searchInp">
            <option selected disabled>Пакет</option>
            <option value="Чебурашка"><?=$toTeacher?></option>
            <option value="Чебурашка"><?=$toApprentice?></option>
        </select>
        <select name="" class="searchInp">
            <option selected disabled><?=$language?></option>
            <option value="Казахский">Казахский</option>
            <option value="Русский">Русский</option>
        </select>
    </form>
    <form action="#" id="searchInputFrom">
        <span class="searchIcon"></span>
        <input type="text" class="searchInput searchInp" placeholder="Поиск">
    </form>
</section>