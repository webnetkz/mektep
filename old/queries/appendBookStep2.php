<?php
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['titleImg']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['titleImg']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
