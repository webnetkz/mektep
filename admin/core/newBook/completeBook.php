<?php
    @header('Content-Type: text/html; charset=utf-8');
    require_once '../../../core/db/db.php';

    $book = trim($_GET['book']);

    $newStatus = 'UPDATE books SET status = 1 WHERE id = '.$book;
    $pdo->query($newStatus);

    $getPartsSQL = 'SELECT * FROM parts_'.$book.' ORDER BY id DESC';
    $parts = $pdo->query($getPartsSQL);
    $parts = $parts->fetchAll(PDO::FETCH_ASSOC);







    echo '<script>location.href = "../books/archive?book='.$book.'"</script>';
?>