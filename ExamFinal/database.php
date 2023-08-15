<?php 
    function connexionDB() {
        $bdd = new PDO("mysql:host=localhost;dbname=aoutmathis", "root", "");
        return $bdd;
    }
?>