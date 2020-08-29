<?php

    $book = trim($_GET['book']);

    // Загрузка титульной страницы
    $uploaddir = '../../../books/'.$book.'/';
    $uploadfile = $uploaddir . basename($_FILES['newFile']['name']);
    move_uploaded_file($_FILES['newFile']['tmp_name'], $uploadfile);

    echo '<script>location.href = "../../editBook/uploadFile?book='.$book.'"</script>';
