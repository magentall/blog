<?php
include 'link_db.php';
$categorie = $_POST['categorie'];
$add_cat = "INSERT INTO categorie (nom) VALUES ('$categorie')";
/*
if ($cnxo->mysqli_connect($add_cat) === TRUE) {
  echo "success";
} else {
  echo "Error: " . $add_cat . "<br>" . $cnxo->error;
}
$cnxo->close();
*/

$bim = mysqli_query($cnx, $add_cat);
if($bim==1){
  echo "categorie ajoutee";
}
else {
  echo "incomplet ou deja existant";
}
?>
