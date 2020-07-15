<?php

    $lang = 'ru';
    $logo = 'logoRu';

    if( isset($_GET['lang']) && ($_GET['lang'] == 'kz' || $_GET['lang' == 'ru']) ) {
        $lang = trim($_GET['lang']);
        $logo = 'logoRu';
    }