<?php

    @session_start();

    $_SESSION['login'] = true;

    if( !isset($_SESSION['login']) ) {
        echo '<script>location.href = "../../index"</script>';
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
        <p style="position: fixed; left: 25vw; color: white;">Создать книгу</p>
    </header>
    <?php require_once '../public/components/header.php'; ?>
    <section id="content">
        <form enctype="multipart/form-data" action="../core/newBook/createBook" method="POST">
            <select name="level" id="level" class="inp" required>
                <option value="" disabled selected>Класс</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
            </select>
            <br>
            <select name="subject" id="subject" class="inp" required>
                <option value="" disabled selected>Предмет</option>
                <option value="Алгебра">Алгебра</option>
                <option value="Әдебиеттік оқ">Әдебиеттік оқу</option>
                <option value="Бастауыш">Бастауыш</option>
                <option value="Биология">Биология</option>
                <option value="География">География</option>
                <option value="Геометрия">Геометрия</option>
                <option value="Дүниежүзі тарихы">Дүниежүзі тарихы</option>
                <option value="Дүниетану">Дүниетану</option>
                <option value="Жаратылыстану">Жаратылыстану</option>
                <option value="Информатика">Информатика</option>
                <option value="Көркем еңбек">Көркем еңбек</option>
                <option value="Қазақ әдебиеті">Қазақ әдебиеті</option>
                <option value="Қазақ тілі">Қазақ тілі</option>
                <option value="Қазақстан тарихы">Қазақстан тарихы</option>
                <option value="Математика">Математика</option>
                <option value="Музыка">Музыка</option>
                <option value="Сауат ашу">Сауат ашу</option>
                <option value="Физика">Физика</option>
                <option value="Познание мира">Познание мира</option>
                <option value="Русская литература">Русская литература</option>
                <option value="Художественный труд">Художественный труд</option>
                <option value="Химия">Химия</option>
            </select>
            <br>
            <select name="lang" id="lang" class="inp" required>
                <option value="" disabled selected>Язык</option>
                <option value="kaz">Казахский</option>
                <option value="rus">Русский</option>
            </select>
            <br>
            <select name="pack" id="pack" class="inp" required>
                <option value="" disabled selected>Пакет</option>
                <option value="t1">Для учителя</option>
                <option value="t2">Для ученика</option>
            </select>
            <br>
            <input type="file" class="inp" name="titleImg" accept=".webp" required>
            <br>
            <input type="submit" class="btn" value="Сохранить" name="saveBook">
        </form>
    </section>
</body>
</html>