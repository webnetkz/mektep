<?php

    @session_start();

    $_SESSION['login'] = 1;

    if( empty($_SESSION['login']) ) {
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
        <p style="position: fixed; left: 25vw; color: white;">Главная</p>
    </header>
    <?php require_once 'public/components/header.php'; ?>
    <section id="content">
        <p style="text-align: center;">
            <img src="../public/img/logoRu.webp" style="width: 350px;">
        </p>
    </section>
</body>
</html>