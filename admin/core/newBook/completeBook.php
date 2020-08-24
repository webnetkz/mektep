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
        // Создание таблицы глав
        $sqlCreateParts = 'CREATE TABLE IF NOT EXISTS parts_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateParts);

        // Создание таблицы контента
        $sqlCreateBook = 'CREATE TABLE IF NOT EXISTS book_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateBook);

        // Создание таблицы тестов
        $sqlCreateTest = 'CREATE TABLE IF NOT EXISTS tests_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, content LONGTEXT NOT NULL, PRIMARY KEY (ID) )';
        $pdo->query($sqlCreateTest);