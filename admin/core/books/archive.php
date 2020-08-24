<?php

    $book = trim($_GET['book']);

    $zip = new ZipArchive();
    $papka = '../../../books/'.$book.'/';
 
    $zip->open('../../../books/'.$book.'/book.zip', ZIPARCHIVE::CREATE);
    $files = scandir($papka); // $papka перем. с путэм к папке
    foreach($files as $file){
        if ($file == '.' || $file == '..' ){continue;}
        $f = $papka.DIRECTORY_SEPARATOR.$file;
        $zip->addFile($f);
    }
    $zip->close();

    echo '<script>location.href = "../../../books/'.$book.'/index.html"</script>';