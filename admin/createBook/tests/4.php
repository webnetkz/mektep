<?php

    @session_start();

    $_SESSION['login'] = 1;

    if( empty($_SESSION['login']) ) {
        echo '<script>location.href = "../index"</script>';
    }

    require_once '../../../core/db/db.php';

    $book = trim($_GET['book']);

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
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <p style="position: fixed; left: 25vw; color: white;">Создание книги, тест с вставкой символа</p>
    </header>
    <?php require_once '../../public/components/header.php'; ?>
    <section id="content">
<style>
    .test {
        position: relative;
        margin: 50px;
        padding: 30px;
        box-shadow: 0 0 10px rgb(200, 200, 200);
        border-radius: 3em;
    }
    .question {
        text-align: center;
    }
    .line {
        margin: 30px;
    }
    .answers {
        margin-left: 40px;
    }
    .inpTest {
        display: inline;
        outline: none;
    }
    .btnTest {
        margin-left: 40px;
    }

</style>
<div class="test">
    <form action="n3?book=<?=$book?>">
        <h2 class="question"><input type="text" class="inpTest" name="question" placeholder="Ворпос" autocomplete="off"></h2>
        <hr class="line">
        <div class="answers">
            <input type="text" class="inpTest" name="before" placeholder="Текст до">
            <br>
            <br>
            <input type="text" class="inpTest" name="after"  placeholder="Текст после">
            <br>
            <br>
            <input type="text" class="inpTest" name="lose"  placeholder="Пропущенное">
        </div>
        <hr class="line">
            <select name="part" class="inp">
                <?php
                    foreach($res as $k => $v) {
                        echo '<option value="'.$v['part'].'">'.$v['part'].'</option>';
                    }
                ?>
            </select>
            <button class="btn" type="submit">Создать тест</button>
            <input type="text" hidden name="book" value="<?=$book?>">
        </form>
    </form>
</div>
</section>
</body>
</html>