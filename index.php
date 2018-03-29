<!DOCTYPE html>
<html>
  <head>
    <title>Blog</title>
    <?php include 'includes/header.html'  ?>
  </head>
  <body id="idbody">
      <div id="id_site" class="main-container">
        <div id="idsite" class="container">
          <div class="row mt-2">
            <div id="idheadgch" class="col-sm-12 col-lg-3">
              <div class="titlesit text-center animated flash">CSA BLOG</div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_cat">Catégorie</label>
              </div>
                  <select class="custom-select" id="sel_cat" onchange="ajax_aff_acceuil()">
                    <option selected>Choix...</option>
                    <?php include 'php/mod_categorie.php'; ?>
                  </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_aut" >Auteur</label>
                </div>
                <select class="custom-select" id="sel_aut" onchange="ajax_aff_acceuil()">
                  <option selected>Choix...</option>
                  <?php include 'php/mod_auteur.php'; ?>
                </select>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_filt">Filtre</label>
                </div>
                <select class="custom-select" id="sel_filt" onchange="ajax_aff_acceuil()">
                  <option selected>Choix...</option>
                  <option value="1">Nouveau</option>
                  <option value="2">Ancien</option>
                  <option value="3">Random</option>
                </select>
              </div>

              <ul id="id_list_acc" class="list-group" /ul>
            </div>
              <div id="main_aff" class="col-sm-12 order-first order-lg-1 col-lg-8" tabindex="-4">
                <div id="buttons">
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addart_Modal" data-whatever="@mdo" onclick="initart()">Add article</button>
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addaut_Modal" data-whatever="@fat">Add auteur</button>
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addcat_Modal" data-whatever="@getbootstrap">Add catégorie</button>
                </div>

                <ul  id="id_main_aff" /ul>

              </div>

              <a id="gotop" href="#top">GOTOP</a>



            </div>
          </div>
        </div>

      <!-- modalz -->
      <?php include 'includes/modalz.html'  ?>

      <!-- FOOTER -->
      <?php include 'includes/footer.html'  ?>
  </body>
</html>
