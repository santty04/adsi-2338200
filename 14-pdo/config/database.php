<?php

    try {
        $conx = new PDO("mysql:host=$host;dbname=$name_db",$user,$password);
        $conx ->exec("set names utf8");

        echo "Connection Successfully!";
    }
    catch(PDOException $e) {
        echo "Connection Error: " .$e->getMessage();
    }