<?php
  require "navbar.php";

?>
  <div class="py-5 text-center">
    <div class="container h-75">
      <div class="row mt-5" style="">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4"></h1>
          <form method="POST" action="connexionVerif.php">
            <?php
             $tab = [];
             $type = '';

             //si il y a une erreur dans le formulaire
             if( !empty($_SESSION["errors_form"]) ){

               //le tableau prend le talbleua des erreurs
               $tab = $_SESSION["errors_form"];

               //le type devient erreur
               $type = 'error';

               //je supprime le tableau d'erreur en session
               unset($_SESSION["errors_form"]);

               //sinon si il y a un succès
             }elseif( !empty($_SESSION["success_form"]) ){
               //le tableau prend le tableau des succes
               $tab = $_SESSION["success_form"];
               // le type devient succes
               $type = 'success';
               //je supprime le tableau des succes de la session
               unset($_SESSION["success_form"]);
             }

             //si mon tableau n'est pas vide
              if( !empty($tab)){
                echo "<ul>";
                //je le parcours (le tableau)
                foreach ($tab as $value) {
                  //j'affiche le résultat en fonction du type (succes ou erreur)
                  echo "<li>".$submitForm[$type][$value];
                }
                echo "</ul>";
              }
            ?>
            <div class="form-group"> <input type="email" class="form-control" placeholder="Enter email" id="form9" name="mailUser"> </div>
            <div class="form-group mb-3"> <input type="password" class="form-control" placeholder="Password" id="form10" name="pwd"> <small class="form-text text-muted text-right">
                <a href="#"> Recover password</a>
              </small> </div> <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php require "footer.php" ?>
