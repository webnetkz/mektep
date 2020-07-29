<?php

    require_once '../core/db/db.php';

    if( ($_POST['pass'] == 123) && ($_POST['login'] == 123)) {
        echo 123;
    } else {
        header('Location: ../index.php'); 
    }