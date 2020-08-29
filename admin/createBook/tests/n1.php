<?php
require_once '../../../core/db/db.php';

$book = trim($_GET['book']);
$part = trim($_GET['part']);

// Получение id главы
$sqlGetPartId = 'SELECT id FROM parts_'.$book.' WHERE part = "'.$part.'"';
$res = $pdo->query($sqlGetPartId);
$part = $res->fetch(PDO::FETCH_ASSOC);
$part = $part['id'];

// Получение id теста
$sqlGetTestId = 'SELECT id FROM tests_'.$book.' WHERE part = "'.$part.'" ORDER BY id DESC';
$resT = $pdo->query($sqlGetTestId);
$test = $resT->fetch(PDO::FETCH_ASSOC);
$test = $test['id'];


if(!empty($_GET['trueFalse1'])) {
    $trueFalse1 = 'true'.$test;
} else {
    $trueFalse1 = 'false';
}

if(!empty($_GET['trueFalse2'])) {
    $trueFalse2 = 'true'.$test;
} else {
    $trueFalse2 = 'false';
}

if(!empty($_GET['trueFalse3'])) {
    $trueFalse3 = 'true'.$test;
} else {
    $trueFalse3 = 'false';
}

if(!empty($_GET['trueFalse4'])) {
    $trueFalse4 = 'true'.$test;
} else {
    $trueFalse4 = 'false';
}

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
.resultTest{$test} 
{text-align: center;}
.resultTest{$test} > p {
    padding: 0.7em;
    border-radius: 1em;
    color: white;
}
.resultTest > p {
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
<input type="radio" class="inpTest {$trueFalse1}" name="test1[]{$test}" onclick="checkTest{$test}(this)">
<span>{$_GET['answer1']}</span>
</p>
<p>
<input type="radio" class="inpTest {$trueFalse2}" name="test1[]{$test}" onclick="checkTest{$test}(this)">
<span>{$_GET['answer2']}</span>
</p>
<p><input type="radio" class="inpTest {$trueFalse3}" name="test1[]{$test}" onclick="checkTest{$test}(this)">
<span>{$_GET['answer3']}</span>
</p>
<p>
<input type="radio" class="inpTest {$trueFalse4}" name="test1[]{$test}" onclick="checkTest{$test}(this)">
<span>{$_GET['answer4']}</span>
</p>
<button class="btn" onclick="document.location.reload(true)">Сбросить</button>
</div>
<hr class="line">
<div class="resultTest{$test}">
</div>
</div>
<script>
    function checkTest{$test}(elem) {
        // Контейнер для результатов теста
        let resultTest = document.querySelector('.resultTest{$test}');
        // Проверяем существует ли данные класс у элемента
        if(elem.classList.contains('true{$test}')) {
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
