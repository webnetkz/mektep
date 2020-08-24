<?php

    @session_start();

    $_SESSION['login'] = true;

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../../index"</script>';
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
        <p style="position: fixed; left: 25vw; color: white;">Добавить файл</p>
    </header>
    <?php require_once '../public/components/header.php'; ?>
    <section id="content">
    <form enctype="multipart/form-data" action="../core/books/uploadFile" method="POST">
            <input type="file" class="inp" name="newFile" required>
            <br>
            <input type="submit" class="btn" value="Сохранить" name="saveBook">
        </form>
    </section>
</body>
</html>