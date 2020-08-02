<?php

    $book = trim($_GET['book']);

    require_once '../../../core/db/db.php';

    $getContentSQL = 'SELECT * FROM book_'.$book.';';
    $resContent = $pdo->query($getContentSQL);
    $resContent = $resContent->fetchAll(PDO::FETCH_ASSOC);

    $last = array_pop($resContent);

    $resContent = html_entity_decode($last['content']);

    $f = fopen('../../../books/'.$book.'/index.html', 'a');
    @fwrite($f, $resContent);
    fclose($f);

    //echo '<script>location.href = "createIndex.php?book='.$book.'"</script>';