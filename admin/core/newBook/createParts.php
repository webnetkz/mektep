<?php

    require_once '../../../core/db/db.php';

    // Получение номера книги
    $book = trim($_POST['book']);

    if( isset($_POST['part']) ) {
        $part = trim($_POST['part']);

        $sql = 'CREATE TABLE IF NOT EXISTS parts_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, PRIMARY KEY (ID) )';

        $appendSql = 'INSERT INTO parts_'.$book.'(`part`) VALUES ("'.$part.'")';
        $res = $pdo->query($appendSql);
    
        if($res) {
            echo '<script>location.href = "../../createBook/text?book='.$book.'"</script>';
        }
    }
    