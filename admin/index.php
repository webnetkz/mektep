﻿<?php

    @session_start();

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../index"</script>';
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <span class="step activeStep">Панель</span>
    </header>
    <section id="content">
        <button class="btn" onclick="location.href = 'createBook/'">Создать книгу</button>
        <br>
        <button class="btn">Редактировать книгу</button>
    </section>
</body>
</html>