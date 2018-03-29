<?php
$serveur = "localhost";//"db724109913.db.1and1.com";
$usr= "viz";//"dbo724109913";
$password = "Bienvenue111***";
$dbName= "blog_af"; // "db724109913";

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

$cnxo =  new mysqli($serveur, $usr, $password, $dbName);
mysqli_set_charset($cnx, "utf8");
?>
