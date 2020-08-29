<?php
require_once '../../../core/db/db.php';

$book = trim($_GET['book']);
$part = trim($_GET['part']);

$before = $_GET['before'];
$after = $_GET['after'];
$best = $_GET['lose'];

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


$content = <<<EOL
<div class="test{$test}">
<style>
.test{$test} {
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
.btn {
    padding: 7px 12px;
    border-radius: 50px;
    color: rgb(255, 255, 255);
    background: rgb(12, 77, 162);
    border: 0;
    outline: none;
    margin: 5px;
    min-width: 200px;
    transition-duration: 400ms;
}
.btn:hover {
    box-shadow: 0 5px 10px rgb(50, 50, 50);
    cursor: pointer;
}
</style>
<h2 class="question">{$_GET['question']}</h2>
<hr class="line">
<div class="answers">
<p>
    {$before} 
    <input type="text" id="answer{$test}">
    {$after}
</p>
</div>
<hr class="line">
<button class="btn" onclick="checkTestWord{$test}()">Проверить</button>
<button class="btn" onclick="document.location.reload(true)">Сбросить</button>
<div class="resultTest{$test}">
</div>
</div>
<script>
    function checkTestWord{$test}() {
        // Контейнер для результатов теста
        let resultTest = document.querySelector('.resultTest{$test}');
        let ress = document.querySelector('#answer{$test}');

        if(ress.value == '{$best}') {
            resultTest.innerHTML = '<p class="trueAnswer">Верный ответ</p>';
        } else {
            resultTest.innerHTML = '<p class="falseAnswer">Ответ не верный</p>';
        }
    }
</script>

EOL;

$content = htmlentities($content);

$appendSql = 'INSERT INTO tests_'.$book.'(`part`, `content`) VALUES ("'.$part.'", "'.$content.'")';
$res = $pdo->query($appendSql);

if($res) {
    echo '<script>location.href = "../test?book='.$book.'"</script>';
}
