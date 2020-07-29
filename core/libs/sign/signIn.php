<?php

    @session_start();

    if( isset($_POST['sign']) ) {
            
            require_once '../../db/db.php';

            $login = trim($_POST['login']);
            $login = htmlentities($login);

            $pass = trim($_POST['pass']);
            $pass = htmlentities($pass);
            
            $sqlLogin = 'SELECT * FROM redactors WHERE login = "'.$login.'"';
            $resLogin = $pdo->query($sqlLogin);
            $resLogin = $resLogin->fetch(PDO::FETCH_ASSOC);

            if($resLogin) {
                
                if($resLogin['pass'] == $pass) {
                    
                    $_SESSION['login'] = $login;
                    echo '<script>location.href = "../../../admin/index"</script>';

                } else {
                    echo '<script>location.href = "../../../index"</script>';
                }
            } else {
                echo '<script>location.href = "../../../index"</script>';
            }

    } else {
        echo '<script>location.href = "../../../index"</script>'; 
    }