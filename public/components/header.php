<?php

    $title = 'Mektep';
    $lang = 'ru';
    $logo = 'logoRu';


    if( isset($_GET['lang']) && ($_GET['lang'] == 'kz' || $_GET['lang' == 'ru']) ) {
        $lang = trim($_GET['lang']);
        $logo = 'logoKz';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="rgb(27, 77, 162)">
    <meta name="author" content="WebNet">
    <meta name="description" content="app">
    <meta name="keywords" content="app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="public/json/manifest.json">
    <link rel="icon" type="image/png" href="public/img/logo.png">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/mStyle.css">
    <link rel="apple-touch-icon" href="public/img/logo.png">
    <title>Mektep</title>
</head>
<body>

    <header>
        <a href="#">
            <img src="public/img/<?=$logo?>.png" alt="логотип издательства Мектеп">
        </a>
        <menu>
            <span class="menuItem">menu</span>
            <span class="menuItem">menu</span>
            <span class="menuItem">menu</span>
            <span class="menuItem">menu</span>
        </menu>
    </header>