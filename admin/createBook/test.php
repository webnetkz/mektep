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
        <p style="position: fixed; left: 25vw; color: white;">Создание книги, тесты</p>
    </header>
    <?php require_once '../public/components/header.php'; ?>
    <section id="content">
            <p>
                <a href="tests/1?book=<?=$book?>">Тест с одним вариантом ответа</a>
            </p>
                <br>
            <p>
                <a href="tests/2?book=<?=$book?>">Тест с несколькими вариантами ответов</a>
            </p>
                <br>
            <p>
                <a href="tests/3?book=<?=$book?>">Тест с вставкой слова</a>
            </p>
                <br>
                <p>
                <a href="tests/4?book=<?=$book?>">Тест с вставкой символа</a>
            </p>
                <br>
                <p>
                <a href="tests/4?book=<?=$book?>">Тест с перетягивание</a>
            </p>
    </section>

</body>
</html>