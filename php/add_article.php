
<?php
//<!-- Intergration de "auteur" dans la bdd -->
include 'link_db.php';
function insert_article($cnx){
       $titre = $_POST['titre'];
       $texte = $_POST['text'];
       $auteur = $_POST['auteur'];
       $categorie = $_POST['categorie'];
       $date_crea = date("Y-m-d");
       $date_modif = $date_crea;
       //echo $date_crea;

       $req_add_art = "INSERT INTO article (titre,texte,auteur,date_crea,date_modif,categorie) VALUES ('$titre','$texte','$auteur','$date_crea','$date_modif', '$categorie')";
       $stmt = mysqli_query($cnx, $req_add_art);
       //echo $req_add_art;
       if ($stmt==1) {
         echo "Article ajouté";
       }
       else {
         echo "Incomplet ou déjà existant, veuillez remplir à nouveau les champs";
       }
}
insert_article($cnx);
?>
