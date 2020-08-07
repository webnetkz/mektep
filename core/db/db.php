<?php

    // Данные для подключения к базе данных
    $driver = 'mysql';
    $host = 'localhost';
    $db_name = 'mektep';
    $db_user = 'root';
    $db_pass = 'root';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try{
        // Создание обьекта PDO и передача данных
        // для подключения в конструктор класса
        $pdo = new PDO(
                        "$driver:host=$host;
                        dbname=$db_name;
                        charset=$charset",
                        $db_user,
                        $db_pass,
                        $options
                    );
    // Отладка ошибок подключения
    }catch(PDOException $e) {
        die($e);
    }

    /*
    $host = 'srv-pleskdb28.ps.kz:3306';
    $db_name = 'webnetkz_mektep';
    $db_user = 'webnetkz_m';
    $db_pass = 'fepipe7611!!QQ';
    */