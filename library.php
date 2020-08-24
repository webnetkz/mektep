<?php


    $style = 'searchBar';
    $styleTwo = 'footer';
    $styleThree = 'library';
    $title = 'Library';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="WebNet">
    <meta name="description" content="<?=$title?>">
    <meta name="keywords" content="<?=$title?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="public/json/manifest.json">
    <!--------| START STYLES |-------->
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="icon" type="image/ico" href="/public/img/logoIco.ico">
        <link rel="stylesheet" href="public/css/<?=$style?>.css">
        <link rel="stylesheet" href="public/css/<?=$styleTwo?>.css">
        <link rel="stylesheet" href="public/css/<?=$styleThree?>.css">
        <link rel="apple-touch-icon" href="/public/img/logoRu.webp">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <meta name="theme-color" content="rgb(27, 77, 162)">
    <!--------| END STYLES |-------->
    <title>
        <?=$title?>
    </title>
</head>
<body>
    <style>
        .menuItem:last-child {
        display: none;
        }
    </style>
    <?php
        require_once 'public/components/header.php';
    ?>
    <section id="content">
        <?php
            require_once 'public/components/searchBar.php';
        ?>
        <?php
            require_once 'public/components/library.php';
        ?>
        <?php
            require_once 'public/components/footer.php';
        ?>
    </section>
    

</body>
</html>