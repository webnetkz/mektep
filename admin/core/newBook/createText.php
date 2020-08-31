<?php

    require_once '../../../core/db/db.php';

    // Получение номера книги
    $book = trim($_POST['book']);

    if( isset($_POST['part']) ) {

        $part = trim($_POST['part']);

        // Получение id главы
        $sqlGetPartId = 'SELECT id FROM parts_'.$book.' WHERE part = "'.$part.'"';
        $res = $pdo->query($sqlGetPartId);
        $part = $res->fetch(PDO::FETCH_ASSOC);
        $part = $part['id'];

        $content = trim($_POST['content']);
        $content = '<div style="margin-top: 4em;" id="'.$part.'">'.$content.'</div>';
        $content = htmlentities($content);

        $appendSql = 'INSERT INTO book_'.$book.'(`part`, `content`) VALUES ("'.$part.'", "'.$content.'")';
        $res = $pdo->query($appendSql);

        if($res) {
            echo '<script>location.href = "../../createBook/text?book='.$book.'"</script>';
        }
    }
    