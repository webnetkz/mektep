<?php

    require_once '../../../core/db/db.php';

    // Получение номера книги
    $book = trim($_POST['book']);

    if( isset($_POST['part']) ) {
        $part = trim($_POST['part']);
        $content = trim($_POST['content']);
        $content = '<div style="width: 100vw; text-align: center;">'.$content.'</div>';
        $content = htmlentities($content);

        $sql = 'CREATE TABLE IF NOT EXISTS book_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sql);

        $appendSql = 'INSERT INTO book_'.$book.'(`part`, `content`) VALUES ("'.$part.'", "'.$content.'")';
        $res = $pdo->query($appendSql);

        if($res) {
            echo '<script>location.href = "createIndex?book='.$book.'"</script>';
        }
    }
    