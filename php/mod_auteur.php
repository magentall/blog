<?php
include 'link_db.php';

$modAuteur = "SELECT nom FROM auteur";

$resModAuteur = mysqli_query($cnx, $modAuteur);

if(mysqli_num_rows($resModAuteur) > 0){
  while ($row =mysqli_fetch_assoc($resModAuteur)){
    for ($i = 0; $i<sizeof($row['nom']); $i++){
      echo "<option value=\"".$i."\">".$row['nom']."</option>";
    }
  }
}
?>
