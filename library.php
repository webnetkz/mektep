<?php


    $style = 'searchBar';
    $styleTwo = 'footer';
    $styleThree = 'library';

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php

    @session_start();

    if( !isset($_SESSION['lang']) ) {
        $_SESSION['lang'] = 'kz';
    }

	// Если пользователь сменил язык
	if( isset($_GET['lang']) ) {
        $_SESSION['lang'] = trim($_GET['lang']);
	}

    // Подключение файла всех данных для языка
    switch( $_SESSION['lang'] ) {
        case 'ru':
            $lang = 'ru';
            $logo = 'logoRu';
            $title = 'ru';
            $newLang = 'kz';
            $language = 'Язык';
        
            // Index page
            $indexHeader = 'Издательство Мектеп';
        
            // Filter page
            $toTeacher = 'Для учителя';
            $toApprentice = 'Для ученика';
            $class = 'Класс';
        
            // Menu items
            $home = 'Главная';
            $lib = 'Библиотека';
            $contacts = 'Контакты';
            $door = 'Войти';
            
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
            break;
        case 'kz':
            $lang = 'kz';
            $logo = 'logoKz';
            $title = 'kz';
            $newLang = 'ru';
            $language = 'Тiл';
        
            // Index page
            $indexHeader = 'Мектеп Баспасы';
        
            // Filter page
            $toTeacher = 'Муғалемғеарн арналған';
            $toApprentice = 'Окушиға арналған';
            $class = 'Сынып';
            $search = 'Iсдеу';
            
            // Menu items
            $home = 'Бас меню';
            $lib = 'Кітапхана';
            $contacts = 'Контакты';
            $door = 'Кiру';
        
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
            break;
    }

?>
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
    <style>
        .menuItem:last-child {
        display: none;
        }
    </style>
    <header>
        <a href="index" class="logoLink">
            <img src="public/img/<?=$logo?>.webp" alt="логотип издательства Мектеп" class="logoHeader">
        </a>
        <img src="public/img/icons/menu.png" alt="burger menu" class="menuBurger">
        <div class="language">
            <span class="lang" onclick="location.href = '?lang=<?=$newLang?>'">
                <?php

                    if($_SESSION['lang'] == 'kz') {
                        echo 'рус';
                    } else {
                        echo 'қаз';
                    }
					
                ?>
            </span>
        </div>
        <menu class="menuHeader">
            <a href="index" class="menuItem">
                <?=$home?>
            </a>
            <a href="library" class="menuItem">
                <?=$lib?>
            </a>
            <a href="contacts" class="menuItem">
                <?=$contacts?>
            </a>
            <span onclick="getSignModal()" class="menuItem">
                <?=$door?>
            </span>

        </menu>
    </header>
    <script src="public/js/mobile/menu.js"></script>

    <section id="content">
        <?php
            require_once 'public/components/searchBar.php';
        ?>
        <?php
            require_once 'public/components/library.php';
        ?>
        <?php
            require_once 'public/components/footer.php';
        ?>
    </section>
    

</body>
</html>