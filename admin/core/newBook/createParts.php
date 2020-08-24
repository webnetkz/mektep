<?php

    require_once '../../../core/db/db.php';

    // Получение номера книги
    $book = trim($_POST['book']);

    if( isset($_POST['part']) ) {
        $part = trim($_POST['part']);

        $appendSql = 'INSERT INTO parts_'.$book.'(`part`) VALUES ("'.$part.'")';
        $res = $pdo->query($appendSql);
    
        if($res) {
            echo '<script>location.href = "../../createBook/parts?book='.$book.'"</script>';
        }
    }
    