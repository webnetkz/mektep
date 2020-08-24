<?php
    @header('Content-Type: text/html; charset=utf-8');

    $book = trim($_GET['book']);

    require_once '../../../core/db/db.php';

    // Получение всех глав книги
    $getPartsSQL = 'SELECT * FROM parts_'.$book.';';
    $resParts = $pdo->query($getPartsSQL);
    $resParts = $resParts->fetchAll(PDO::FETCH_ASSOC);

    // Получение всего контента книги
    $getContentSQL = 'SELECT * FROM book_'.$book.';';
    $resContent = $pdo->query($getContentSQL);
    $resContent = $resContent->fetchAll(PDO::FETCH_ASSOC);

    // Получение всех тестов книги
    $getTestsSQL = 'SELECT * FROM tests_'.$book.';';
    $resTests = $pdo->query($getTestsSQL);
    $resTests = $resTests->fetchAll(PDO::FETCH_ASSOC);

    /*
    echo '<pre>';
    var_dump($resParts);
    echo '<hr>';
    var_dump($resContent);
    echo '<hr>';
    var_dump($resTests);
    */

    $set1 = '<title>Mektep</title>
    <meta charset="UTF-8">
    <style>
        .h {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 3em;
            box-shadow: 0 0 10px black;
            background: rgb(12, 77, 162);
            color: rgb(255, 255, 255);
            padding-top: 1em;
            z-index: 99999;
        }
		.inp {
			outline: none;
			padding: 4px;
			border-radius: 4px;
			border: 1px solid rgb(12, 77, 162);
			margin: 5px;
			min-width: 200px;
		}
		.btn {
			padding: 7px 12px;
			border-radius: 50px;
			color: rgb(255, 255, 255);
			background: rgb(12, 77, 162);
			border: 0;
			outline: none;
			margin: 5px;
			min-width: 200px;
			transition-duration: 400ms;
		}
		.btn:hover {
			box-shadow: 0 5px 10px rgb(50, 50, 50);
		}
        .ql-align-center {text-align: center;}
        .ql-align-right {text-align: right;}
		.navigation {
			position: fixed;
			left: -100vw;
			width: 200px;
			height: 80vh;
			top: 4.5em;
			box-shadow: 0 0 10px rgb(50, 50, 50);
			padding: 10px;
			overflow-x: hidden;
			overflow-y: scroll;
			transition-duration: 500ms;
			z-index: 9999;
			background-color: rgb(255, 255, 255);
		}
		.navigationItem {
			display: block;
			padding: 5px;
        }
        .ql-video {
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="h">
		<button class="inp" id="navig" onclick="xxx()">Навигация</button>
    </div>
    <div class="navigation">';
    
	$set2 = "</div>
	<script>

        function xxx() {
            let navigation = document.querySelector('.navigation');

            if(navigation.name == 'hid') {
                navigation.style.left = '-100vw';
                navigation.name = ' ';
            } else {
                navigation.style.left = '0px';
                navigation.name = 'hid';
            }
        }
    </script>";

    foreach($resParts as $k => $v) {
        $set1 .= '<a href="#'.$v['id'].'" class="navigationItem">'.$v['part'].'</a>';
    }

    $q = 0;
    // Расшифровка полученого контента
    foreach($resContent as $k => $v) {
        foreach($resTests as $key => $value) {
            if($v['part'] == $value['part']) {
                if($value['id'] != $value['part']) {
                    $resContent .= html_entity_decode($value['content']);
                } else {
                    $resContent .= html_entity_decode($v['content']) .''. html_entity_decode($value['content']);
                }
            }
        }
    }

    $set = $set1.''.$set2;

    $set = $set .''. $resContent;

    $f = fopen('../../../books/'.$book.'/index.html', 'w');
    @fwrite($f, $set);
    fclose($f);
    
    
    echo '<script>location.href = "../../../books/'.$book.'/index.html"</script>';
    