<?php
//on demarre la session
//session_start();
//connexion local

$dbhost = 'localhost';
$dbname = 'actionmephi';
$dbuser = 'root';
$dbpassword = '';


// Créer une connexion à la base de données avec PDO (PHP Data Objects)
try {
    $connexion = new PDO('mysql:host=' . $dbhost . '; dbname=' . $dbname, $dbuser, $dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    //throw $th;
    die("Erreur lors de la connexion de la base de données; Vérifier");
}
