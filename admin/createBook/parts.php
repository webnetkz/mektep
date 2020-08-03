<?php

    @session_start();

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../../index"</script>';
    }

    $book = trim($_GET['book']);

    require_once '../../core/db/db.php';

    $sql = 'CREATE TABLE IF NOT EXISTS parts_'.$book.'(id INT NOT NULL AUTO_INCREMENT, part VARCHAR (255) NOT NULL, PRIMARY KEY (ID) )';
    $pdo->query($sql);

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
        <span class="step activeStep" onclick="location.href = 'parts?book=<?=$book?>'">Содержание</span>
    </header>
    <section id="content" style="display: flex;">
        <form enctype="multipart/form-data" name="formParts" action="../core/newBook/createParts" method="POST">
            <input type="text" class="inp" name="part" placeholder="Введите название главы" required>
            <br>
            <input type="submit" class="btn" value="Сохранить" name="saveBook">
            <input type="text" hidden name="book" value="<?=$book?>">
        </form>
        <div class="navRight">
            <ul class="navList">
                <?php
                    foreach($res as $k => $v) {
                        echo '<li>'.$v['id'].' . '.$v['part'].'</li>';
                    }
                ?>
            </ul>
        </div>
    </section>
</body>
</html>