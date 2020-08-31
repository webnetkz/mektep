<?php

    @session_start();

    $_SESSION['login'] = 1;

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
        <p style="position: fixed; left: 25vw; color: white;">Редактирование книги - добавить главу</p>
    </header>
<?php require_once '../public/components/header.php'; ?>
    <section id="content" style="width: 55vw;">
        <form enctype="multipart/form-data" name="formParts" action="../core/newBook/createParts" method="POST">
                <input type="text" class="inp" style="width: 100%;" autocomplete="off" name="part" placeholder="Введите название главы" required>
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