<?php

    $_GET['before'] = 123123123;
    $_GET['after'] = 12312123123123123123123;
    $_GET['best'] == 'f1';
?>
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
    <?=$_GET['before']?>
    <input type="text" id="answer">
    <?=$_GET['after']?>
</p>
</div>
<hr class="line">
<button class="btn" onclick="checkTestWord()">Проверить</button>
<button class="btn" onclick="document.location.reload(true)">Сбросить</button>
<div class="resultTest">
</div>
</div>
<script>
    function checkTestWord/*{$test}*/() {
        // Контейнер для результатов теста
        let resultTest = document.querySelector('.resultTest');
        let ress = document.querySelector('#answer');

        if(ress.value == 'f1') {
            resultTest.innerHTML = '<p class="trueAnswer">Верный ответ</p>';
        } else {
            resultTest.innerHTML = '<p class="falseAnswer">Ответ не верный</p>';
        }
    }
</script>