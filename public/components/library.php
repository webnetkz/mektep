<?php

    require_once 'core/db/db.php';

    $sql = 'SELECT * FROM books';
    $res = $pdo->query($sql);
    $res = $res->fetchAll(PDO::FETCH_ASSOC);
?>
<section id="library">

    <?php

        foreach($res as $k => $v) {
            echo '<div class="book '. $v['level'] .' '. $v['subject'] .' '. $v['lang']. ' '. $v['pack'].'" onclick="location.href = \'books/'.$v['id'].'/index.html\'">';
            echo    '<img src="books/'.$v['id'].'/'.$v['titleImg'].'" alt="subject mektep" class="bookImg">';
            echo    '<p class="bookDesc">'.$v['subject'].'</p>';
            echo '</div>';
        }

    ?>

    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра Алгебра Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра Алгебра Алгебра Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебраsdafsdfasdf Алгебра Алгебра Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
    <div class="book">
        <img src="public/img/b1.jpg" alt="" class="bookImg">
        <p class="bookDesc">Алгебра</p>
    </div>
</section>
<script>
    function filter(elem) {
        let allBooks = document.getElementsByClassName('book');
        let selectBooks = document.getElementsByClassName(elem.value);

        for(let i = 0; i < allBooks.length; i++) {
            allBooks[i].style.display = 'none';
        }

        for(let i = 0; i < selectBooks.length; i++) {
            selectBooks[i].style.display = 'block';
        }
    }
</script>