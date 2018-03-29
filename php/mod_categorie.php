<?php
include 'link_db.php';
echo 'test';
$modCat = "SELECT nom FROM categorie";

$resModCat = mysqli_query($cnx, $modCat);

if(mysqli_num_rows($resModCat) > 0){
  while ($row =mysqli_fetch_assoc($resModCat)){
    for ($i = 0; $i<sizeof($row['nom']); $i++){
      echo "<option value=\"".$i."\">".$row['nom']."</option>";
    }
  }
}
?>
