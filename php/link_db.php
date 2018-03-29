<?php
$serveur = "db724109913.db.1and1.com";
$usr= "dbo724109913";
$password = "Bienvenue111***";
$dbName= "db724109913";

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

$cnxo =  new mysqli($serveur, $usr, $password, $dbName);
mysqli_set_charset($cnx, "utf8");
?>
