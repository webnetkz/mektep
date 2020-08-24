<?php

    ini_set("max_execution_time", 300);
    require_once '../../../core/db/db.php';

    // Получение номера книги
    $sqlLast = 'SELECT id FROM books order by id desc';
    $lastId = $pdo->query($sqlLast);
    $lastId = $lastId->fetch(PDO::FETCH_ASSOC);
    $lastId = ++$lastId['id'];

    // Данные для книги
    $level = trim($_POST['level']);
    $subject = trim($_POST['subject']);
    $lang = trim($_POST['lang']);
    $pack = trim($_POST['pack']);
    
    // Создание директории для книги
    mkdir('../../../books/'.$lastId, 0777, true);

    // Загрузка титульной страницы
    $uploaddir = '../../../books/'.$lastId.'/';
    $uploadfile = $uploaddir . basename($_FILES['titleImg']['name']);

    if (move_uploaded_file($_FILES['titleImg']['tmp_name'], $uploadfile)) {

        // Добавление данных в бд
        $sql = 'INSERT INTO books(`level`, `subject`, `lang`, `pack`, `titleImg`, `status`) VALUES("'.$level.'", "'.$subject.'", "'.$lang.'", "'.$pack.'", "'.$_FILES['titleImg']['name'].'", 0)';  
        $res = $pdo->query($sql);

        // Создание таблицы глав
        $sqlCreateParts = 'CREATE TABLE IF NOT EXISTS parts_'.$lastId.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateParts);

        // Создание таблицы контента
        $sqlCreateBook = 'CREATE TABLE IF NOT EXISTS book_'.$lastId.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateBook);

        // Создание таблицы тестов
        $sqlCreateTest = 'CREATE TABLE IF NOT EXISTS tests_'.$lastId.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateTest);

        // Редирект на страницу редактирования учебника
        if($res) {
            echo '<script>location.href = "../../editBook/index?book='.$lastId.'"</script>';
        }
    }