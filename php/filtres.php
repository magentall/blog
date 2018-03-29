<?php

$cat = $_POST['cat'];
$aut = $_POST['aut'];
$filt = $_POST['filt'];

$req = "SELECT * FROM article";
$where = 0;

if ($cat!='Choix...') {
    $req = $req." WHERE article.categorie='".$cat."'";
    $where=1;
}
if ($aut!='Choix...') {
    if ($where==0) {
      $req = $req." WHERE article.auteur='".$aut."'";
      $where=1;
    }
    else {
      $req = $req." AND article.auteur='".$aut."'";
    }
}
if ($filt!='Choix...') {
  if ($filt=='Nouveau') {
    $req = $req." ORDER BY date_modif DESC";
  }
  if ($filt=='Ancien') {
    $req = $req." ORDER BY date_modif ASC";
  }
}

//echo $req;


?>
