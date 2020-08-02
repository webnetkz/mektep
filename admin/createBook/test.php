<?php

    @session_start();

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../../index"</script>';
    }

    $book = trim($_GET['book']);

    require_once '../../core/db/db.php';

    $getPartsSql = 'SELECT * FROM parts_'.$book.'';
    $res = $pdo->query($getPartsSql);
    
    if($res) {
        $res = $res->fetchAll(PDO::FETCH_ASSOC);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <!--<span class="step" onclick="location.href = '../index'">Панель</span>-->
        <span class="step completeStep">Основное</span>
        <span class="step completeStep" onclick="location.href = 'parts?book=<?=$book?>'">Содержание</span>
        <span class="step completeStep" onclick="location.href = 'text?book=<?=$book?>'">Текст</span>
        <span class="step activeStep" onclick="location.href = 'test?book=<?=$book?>'">Тесты</span>
    </header>
    <section id="content">

        <form enctype="multipart/form-data" name="formParts" action="../core/newBook/createParts" method="POST">
            <select name="part" class="inp" onchange="appendEditor()">
                <?php
                    foreach($res as $k => $v) {
                        echo '<option value="'.$v['id'].'">'.$v['part'].'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Сохранить" name="saveText" class="btn">
        </form>

    </section>

    <script>
        let content = document.querySelector('.ql-editor');
    </script>
</body>
</html>