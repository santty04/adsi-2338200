<?php

    try {
        $conx = new PDO("mysql:host=$host;dbname=$name_db",$user,$password);
        $conx ->exec("set names utf8");

        // echo "Connection Successfully!";
    }
    catch(PDOException $e) {
        echo "Connection Error: " .$e->getMessage();
    }
    // CRUD => Pokemons
    // List All Pokemons
    function listAllPokemons($conx){
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, trainers AS t
                    WHERE p.trainer_id = t.id";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    };
    function showPokemon($conx, $id){
        try {
            $sql = "SELECT p.*, t.name AS nametrainer
                    FROM pokemons AS p, trainers AS t
                            WHERE p.id = :id AND p.trainer_id = t.id";
             $stm = $conx->prepare($sql);
             $stm->bindparam(":id", $id);
             $stm->execute();
             return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // List All Trainers
    function listAllTrainers($conx){
        try {
            $sql = "SELECT * 
                    FROM trainers";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
