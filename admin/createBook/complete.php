<?php

    @session_start();

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../../index"</script>';
    }

    $book = trim($_GET['book']);

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
    <header>
        <!--<span class="step" onclick="location.href = '../index'">Панель</span>-->
        <span class="step completeStep">Основное</span>
        <span class="step completeStep" onclick="location.href = 'parts?book=<?=$book?>'">Содержание</span>
        <span class="step completeStep" onclick="location.href = 'text?book=<?=$book?>'">Текст</span>
        <span class="step activeStep">Публикация</span>
    </header>
    </header>
    <section id="content">
        <button class="btn" onclick="location.href = '../core/newBook/completeBook?book=<?=$book?>'">Публиковать</button>
    </section>
</body>
</html>