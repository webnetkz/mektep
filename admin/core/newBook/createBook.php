<?php

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
        $sql = 'INSERT INTO books(`level`, `subject`, `lang`, `pack`, `titleImg`) VALUES("'.$level.'", "'.$subject.'", "'.$lang.'", "'.$pack.'", "'.$_FILES['titleImg']['name'].'")';
        
        $res = $pdo->query($sql);

        if($res) {
            echo '<script>location.href = "../../createBook/parts?book='.$lastId.'"</script>';
        }
    }