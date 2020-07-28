<?php

    if( isset($_SESSION['lang']) ) {

        // Подключение файла всех данных для языка
        switch( $_SESSION['lang'] ) {
            case 'ru':
                require_once 'public/langs/ru.php';
                break;
            case 'kz':
                require_once 'public/langs/kz.php';
                break;
        } 
    } else {
        $_SESSION['lang'] = 'kz';
        require_once 'public/langs/kz.php';
    }

	// Если пользователь сменил язык
	if( isset($_GET['lang']) ) {
        $_SESSION['lang'] = trim($_GET['lang']);
	}


?>