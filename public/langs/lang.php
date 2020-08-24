<?php

// Язык по умолчанию
$lang = 'kz';

// Если пользователь сменил язык
if( !empty($_GET['lang']) ) {
    $lang = trim($_GET['lang']);
}

// Подключение файла всех данных для языка
switch( $lang ) {
    case 'ru':
        $lang = 'ru';
        $logo = 'logoRu';
        $newLang = 'kz';
        $language = 'Язык';
    
        // Index page
        $indexHeader = 'Издательство Мектеп';

        // Filter page
        $toTeacher = 'Для учителя';
        $toApprentice = 'Для ученика';
        $class = 'Класс';

        // Subject
        $subject = '<option selected disabled>Предмет</option>
        <option value="Биология">Биология</option>
        <option value="География">География</option>
        <option value="Геометрия">Геометрия</option>
        <option value="Информатика">Информатика</option>
        <option value="Математика">Математика</option>
        <option value="Музыка">Музыка</option>
        <option value="Познание мира">Познание мира</option>
        <option value="Русская литература">Русская литература</option>
        <option value="Физика">Физика</option>
        <option value="Художественный труд">Художественный труд</option>
        <option value="Химия">Химия</option>';
    
        // Menu items
        $home = 'Главная';
        $lib = 'Библиотека';
        $contacts = 'Контакты';
        $door = 'Войти';
        break;
    case 'kz':
        $lang = 'kz';
        $logo = 'logoKz';
        $newLang = 'ru';
        $language = 'Тiл';
    
        // Index page
        $indexHeader = 'Мектеп Баспасы';

        // Filter page
        $toTeacher = 'Муғалемғеарн арналған';
        $toApprentice = 'Окушиға арналған';
        $class = 'Сынып';
        $search = 'Iсдеу';

        // Subject
        $subject = '<option selected disabled>Пән</option>
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
        <option value="Әдебиеттік оқу">Әдебиеттік оқу</option>
        <option value="Физика">Физика</option>
        <option value="Алгебра">Алгебра</option>
        <option value="Химия">Химия</option>';
        
        // Menu items
        $home = 'Бас меню';
        $lib = 'Кітапхана';
        $contacts = 'Байланыс';
        $door = 'Кiру';
        break;
}