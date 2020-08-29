<section id="searchBar">
    <form method="GET" id="searchForm">
        <select name="lavel" class="searchInp" onchange="filter(this)">
            <option selected disabled><?=$class?></option>
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
        <select name="subject" class="searchInp" onchange="filter(this)">
            <?=$subject?>
        </select>
        <select name="lang" class="searchInp" onchange="filter(this)">
            <option selected disabled><?=$language?></option>
            <option value="kaz">Казахский</option>
            <option value="rus">Русский</option>
        </select>
        <select name="pack" class="searchInp" onchange="filter(this)">
            <option selected disabled>Пакет</option>
            <option value="t1"><?=$toTeacher?></option>
            <option value="t2"><?=$toApprentice?></option>
        </select>
    </form>
    <form id="searchInputFrom">
        <span class="searchIcon"></span>
        <input type="text" class="searchInput searchInp" placeholder="" name="findInp">
        <button class="searchBtn" type="submit"><?=$search?></button>
    </form>
</section>