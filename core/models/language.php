<?php

    $lang = 'kz';
    $logo = 'logoKz';

    if( isset($_GET['lang']) && ($_GET['lang'] == 'kz' || $_GET['lang' == 'ru']) ) {
        
        $lang = trim($_GET['lang']);
        
        if($_GET['lang'] == 'ru') {
            $logo = 'logoRu';
        } else {
            $logo = 'logoKz';
        }
    }