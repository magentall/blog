<?php
include 'link_db.php';

$id_article = $_POST['id_article'];
$reqAffArt = "SELECT * FROM article WHERE article.id_article=".$id_article;
$resFull=false;
$resFull = mysqli_query($cnx, $reqAffArt);
mysqli_close($cnx);
//Affiche la liste des articles

if(mysqli_num_rows($resFull) > 0){
  while ($row = mysqli_fetch_assoc($resFull)){
        echo "<div class=\"container-fluid\">";
        echo "<li class=\"list-group-item disabled\">Article n°".$row['id_article']." : ".$row['titre']."</li>";
        echo "<li class=\"list-group-item ft9\">Categorie: ".$row['categorie']."</li>";
        echo "<li class=\"list-group-item ft9\">".$row['auteur']." a créé(e) cet article le ".$row['date_crea']."</li>";
        echo "<li class=\"list-group-item \">".$row['texte']."</li>";
        echo "</div>";

  };
}

?>
