<?php

    $username="root";
    $host="localhost";
    $pwd="";
    $dbname="FocepMf";
    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $username, $pwd);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }  