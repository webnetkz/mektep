<?php
    @header('Content-Type: text/html; charset=utf-8');
    require_once '../../../core/db/db.php';

    $book = trim($_GET['book']);

    $newStatus = 'UPDATE books SET status = 1 WHERE id = '.$book;
    $pdo->query($newStatus);

    $getPartsSQL = 'SELECT * FROM parts_'.$book.' ORDER BY id DESC';
    $parts = $pdo->query($getPartsSQL);
    $parts = $parts->fetchAll(PDO::FETCH_ASSOC);

    $con1 = '<title>Mektep</title>
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
    </style>
    <div class="h">
		<button class="inp" id="navig" onclick="xxx()">Навигация</button>
    </div>
    <div class="navigation">';
    
	$con2 = "</div>
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

    foreach($parts as $k => $v) {
        $con2 = '<a href="#'.$v['part'].'" class="navigationItem">'.$v['part'].'</a>'.$con2;
    }
    $con = $con1.''.$con2;

    $f = fopen('../../../books/'.$book.'/index.html', 'a');
    @fwrite($f, $con);
    fclose($f);

    echo '<script>location.href = "../../../books/'.$book.'/index.html"</script>';
?>
