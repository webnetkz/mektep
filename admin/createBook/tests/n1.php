<?php
require_once '../../../core/db/db.php';

$book = trim($_GET['book']);
$part = trim($_GET['part']);

// Получение id главы
$sqlGetPartId = 'SELECT id FROM parts_'.$book.' WHERE part = "'.$part.'"';
$res = $pdo->query($sqlGetPartId);
$part = $res->fetch(PDO::FETCH_ASSOC);
$part = $part['id'];

if(!empty($_GET['trueFalse1'])) {
    $trueFalse1 = 'true'.$part;
} else {
    $trueFalse1 = 'false';
}

if(!empty($_GET['trueFalse2'])) {
    $trueFalse2 = 'true'.$part;
} else {
    $trueFalse2 = 'false';
}

if(!empty($_GET['trueFalse3'])) {
    $trueFalse3 = 'true'.$part;
} else {
    $trueFalse3 = 'false';
}

if(!empty($_GET['trueFalse4'])) {
    $trueFalse4 = 'true'.$part;
} else {
    $trueFalse4 = 'false';
}

var_dump($part);
$content = <<<EOL
<div class="test">
<style>
.test {
    position: relative;
    margin: 50px;
    padding: 30px;
    box-shadow: 0 0 10px rgb(200, 200, 200);
    border-radius: 3em;
}
.question {text-align: center;}
.line {margin: 30px;}
.answers {margin-left: 40px;}
.inpTest {display: inline;}
.resultTest{$part} 
{text-align: center;}
.resultTest{$part} > p {
    padding: 0.7em;
    border-radius: 1em;
    color: white;
}
.trueAnswer {background-color: green;}
.falseAnswer {background-color: red;}
</style>
<h2 class="question">{$_GET['question']}</h2>
<hr class="line">
<div class="answers">
<p>
<input type="radio" class="inpTest {$trueFalse1}" name="test1[]{$part}" onclick="checkTest{$part}(this)">
<span>{$_GET['answer1']}</span>
</p>
<p>
<input type="radio" class="inpTest {$trueFalse2}" name="test1[]{$part}" onclick="checkTest{$part}(this)">
<span>{$_GET['answer2']}</span>
</p>
<p><input type="radio" class="inpTest {$trueFalse3}" name="test1[]{$part}" onclick="checkTest{$part}(this)">
<span>{$_GET['answer3']}</span>
</p>
<p>
<input type="radio" class="inpTest {$trueFalse4}" name="test1[]{$part}" onclick="checkTest{$part}(this)">
<span>{$_GET['answer4']}</span>
</p>
</div>
<hr class="line">
<div class="resultTest{$part}">
</div>
</div>
<script>
    function checkTest{$part}(elem) {
        // Контейнер для результатов теста
        let resultTest = document.querySelector('.resultTest{$part}');
        // Проверяем существует ли данные класс у элемента
        if(elem.classList.contains('true{$part}')) {
            resultTest.innerHTML = '<p class="trueAnswer">Верный ответ</p>';
            console.log(true);
        } else {
            resultTest.innerHTML = '<p class="falseAnswer">Ответ не верный</p>';
            console.log(false);
        }}
</script>

EOL;

$content = htmlentities($content);

$appendSql = 'INSERT INTO tests_'.$book.'(`part`, `content`) VALUES ("'.$part.'", "'.$content.'")';
$res = $pdo->query($appendSql);

if($res) {
    echo '<script>location.href = "../test?book='.$book.'"</script>';
}
