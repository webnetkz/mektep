<?php

    @session_start();

    $_SESSION['login'] = 1;

    if( empty($_SESSION['login']) ) {
        echo '<script>location.href = "../index"</script>';
    }
    
    $book = trim($_GET['book']);

    require_once '../../core/db/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <p style="position: fixed; left: 25vw; color: white;">Редактировать книгу</p>
    </header>
    <?php require_once '../public/components/header.php'; ?>
    <section id="content">
        <button class="btn" onclick="location.href = '../createBook/parts?book=<?=$book?>'">Добавить главу</button><br>
        <button class="btn" onclick="location.href = '../createBook/text?book=<?=$book?>'">Добавить содержание</button><br>
        <button class="btn" onclick="location.href = '../createBook/test?book=<?=$book?>'">Добавить тест</button><br>
        <button class="btn" onclick="location.href = 'uploadFile?book=<?=$book?>'">Добавить файл</button><br>
        <button class="btn" onclick="location.href = '../core/newBook/createIndex?book=<?=$book?>'">Собрать \ пересобрать книгу</button><br>
    </section>
</body>
</html>