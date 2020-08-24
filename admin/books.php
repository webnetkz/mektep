<?php

    @session_start();

    $_SESSION['login'] = 1;

    if( empty($_SESSION['login']) ) {
        echo '<script>location.href = "../index"</script>';
    }

    require_once '../core/db/db.php';

    $SQLgetBooks = 'SELECT * FROM `books`';
    $resBooks = $pdo->query($SQLgetBooks);
    $resBooks = $resBooks->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Mektep Admin</title>
</head>
<body>
    <header>
        <p style="position: fixed; left: 25vw; color: white;">Публикация книг</p>
    </header>
    <?php require_once 'public/components/header.php'; ?>
    <section id="content">
        <?php

            foreach($resBooks as $k => $v) {
                echo '<div class="showBook">';
                    echo '<span>';
                        echo $v['id'] . '. ';
                    echo '</span>';
                    echo '<span>';
                        echo $v['subject'] . ' - ' . $v['level'];
                    echo '</span>';
                    
                        if($v['status'] == 0) {
                            echo '<button class="statusBook btn" onclick="location.href = \'core/books/changeStatus?book='.$v['id'].'&status='.$v['status'].'\'">';
                                echo 'Опубликовать';
                            echo '</button>';
                        } else {
                            echo '<button class="statusBook btn" onclick="location.href = \'core/books/changeStatus?book='.$v['id'].'&status='.$v['status'].'\'">';
                                echo 'Скрыть';
                            echo '</button>';
                        }
                    
                    echo '<hr style="margin: 10px">';
                echo '</div>';
            }

        ?>
    </section>
</body>
</html>