<?php

    require_once '../../../core/db/db.php';

    $book = trim($_GET['book']);
    $status = trim($_GET['status']);

    if($status == 0) {
        $SQLchangeStatus = 'UPDATE books SET status = 1 WHERE id ='.$book;
        $resChange = $pdo->query($SQLchangeStatus);
    } else {
        $SQLchangeStatus = 'UPDATE books SET status = 0 WHERE id ='.$book;
        $resChange = $pdo->query($SQLchangeStatus);
    }

    echo '<script> location.href = "../../books"; </script>';