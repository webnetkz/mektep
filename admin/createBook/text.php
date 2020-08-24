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
        <p style="position: fixed; left: 25vw; color: white;">Редактирование книги - добавить содержание</p>
    </header>
    <?php require_once '../public/components/header.php'; ?>
    <section id="content">
        <!-- Include stylesheet -->
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <style>
            .ql-toolbar {
                width: 70vw;
            }
            .ql-video {
                width: 100%;
                height: 100%;
            }
        </style>
        <!-- Create the editor container -->
        <div id="editor" style="width: 70vw; height: 65vh">

        <p><br></p>
        </div>

        <!-- Include the Quill library -->
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

        <!-- Initialize Quill editor -->
        <script>
        var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
        ['blockquote', 'code-block'],

        //[{ 'header': 1 }, { 'header': 2 }],               // custom button values
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
        [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
        [{ 'direction': 'rtl' }],                         // text direction

        //[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

        [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
        [{ 'font': [] }],
        [{ 'align': [] }],
        ['link', 'image', 'video'],
        ['clean']                                         // remove formatting button
        ];
        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
        </script>
        <form enctype="multipart/form-data" name="formParts" action="../core/newBook/createText" method="POST">
            <select name="part" class="inp">
                <?php
                    foreach($res as $k => $v) {
                        echo '<option value="'.$v['part'].'">'.$v['part'].'</option>';
                    }
                ?>
            </select>
            <input type="submit" value="Сохранить" onclick="appendText()" name="saveText" class="btn">
            <input type="text" hidden name="book" value="<?=$book?>">
            <input type="text" hidden name="content" id="resText">
        </form>

    </section>

    <script>
        let content = document.querySelector('.ql-editor');
        let part = document.querySelector('#resText');

        function appendText() {
            part.value = content.innerHTML;
        }
    </script>
</body>
</html>