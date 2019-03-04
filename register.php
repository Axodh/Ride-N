<?php
  require_once "navbar.php";
  
?>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-lg-6 col-10">
          <h1>Bienvenue !</h1>
          <form method="POST" action="saveUsers.php">
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

               //Je reprend le formulaire envoyé avec ses données
               $dataForm = $_SESSION["data_form"];

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
          <p class="mb-3">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees.</p>
          <form class="text-left">
            <div class="form-group"> <label for="form16">Nom</label> <input type="text" name="nameUser" class="form-control" id="form16" value="<?php echo ( isset($dataForm["nameUser"]))?$dataForm["nameUser"]:"";?>"/>
                                                                                                                                          <!-- lors d'un retour en arriere les valeurs restent affiché -->
              <div class="form-group"><label>Prénom</label><input type="text" class="form-control" id="form16" name="surnameUser" value="<?php echo ( isset($dataForm["surnameUser"]))?$dataForm["surnameUser"]:"";?>"/></div>
            </div>
            <div class="form-group" style=""> <label for="form17">Numéro Teléphone</label> <input type="text" class="form-control" id="form17" style="" name="numberUser" value="<?php echo ( isset($dataForm["numberUser"]))?$dataForm["numberUser"]:"";?>"/> </div>
            <div class="form-group" style=""> <label for="form16">Adresse</label> <input type="text" class="form-control" id="form17" style="" name="addressUser" value="<?php echo ( isset($dataForm["addressUser"]))?$dataForm["addressUser"]:"";?>"/> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Ville</label> <input type="text" class="form-control" id="form19" placeholder="Votre Ville" name="cityUser" value="<?php echo ( isset($dataForm["cityUser"]))?$dataForm["cityUser"]:"";?>"/> </div>
              <div class="form-group col-md-6"> <label for="form20">Code Postal<br></label> <input type="text" class="form-control" id="form20" placeholder="Votre Code Postal" name="zipCode" value="<?php echo ( isset($dataForm["zipCode"]))?$dataForm["zipCode"]:"";?>"/> </div>
            </div>
            <div class="form-group"> <label for="form18">Email</label> <input type="email" class="form-control" id="form18" placeholder="j.goethe@werther.com" name="mailUser" value="<?php echo ( isset($dataForm["mailUser"]))?$dataForm["mailUser"]:"";?>"/> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="form19">Mot de Passe</label> <input type="password" class="form-control" id="form19" placeholder="••••" name="pwd"> </div>
              <div class="form-group col-md-6"> <label for="form20">Confirmer le Mot de Passe<br></label> <input type="password" class="form-control" id="form20" placeholder="••••" name="pwd2"> </div>
            </div>
            <div class="form-group">
              <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of the service </label> </div>
            </div> <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
          <div class="form-group"><label>Label</label></div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row pt-5 border-top">
        <div class="col-12 col-md"> <i class="fa fa-lg fa-bullseye d-block mb-2"></i> <small class="d-block mb-3 text-muted">© 2017-2018</small> </div>
        <div class="col-6 col-md">
          <h5><b>Features</b></h5>
          <ul class="list-unstyled">
            <li>
              <a class="text-muted" href="#">Cool stuff</a>
            </li>
            <li>
              <a class="text-muted" href="#">Random feature</a>
            </li>
            <li>
              <a class="text-muted" href="#">Team feature</a>
            </li>
            <li>
              <a class="text-muted" href="#">Stuff for developers</a>
            </li>
            <li>
              <a class="text-muted" href="#">Another one</a>
            </li>
            <li>
              <a class="text-muted" href="#">Last time</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5><b>Resources</b></h5>
          <ul class="list-unstyled">
            <li>
              <a class="text-muted" href="#">Resource</a>
            </li>
            <li>
              <a class="text-muted" href="#">Resource name</a>
            </li>
            <li>
              <a class="text-muted" href="#">Another resource</a>
            </li>
            <li>
              <a class="text-muted" href="#">Final resource</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5><b>About</b></h5>
          <ul class="list-unstyled">
            <li>
              <a class="text-muted" href="#">Team</a>
            </li>
            <li>
              <a class="text-muted" href="#">Locations</a>
            </li>
            <li>
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li>
              <a class="text-muted" href="#">Terms</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>
