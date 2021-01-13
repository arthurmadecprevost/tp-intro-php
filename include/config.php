<?php

    $host="127.0.0.1";
    //$user="tp-intro-php";
    $user="root";
    //$password="tpintrophp";
    $password="";
    $database="tp-intro-php";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", "$user", "$password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERREUR: ' . $e->getMessage();
    }
?>