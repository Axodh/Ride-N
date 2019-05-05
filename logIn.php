<?php $pageTitle = "Log In";
require_once "navbar.php" ?>
<main>
    <div class="text-center">
        <div class="container">
            <div class="row">
                <h1 class="center white-text" style="font-variant: small-caps"><?php echo $GLOBALS['LOG_IN_TITLE']?> - user </h1><br>
                <form method="POST" action="connexionVerif.php" class="col s12">
                    <?php
                    $tab = [];
                    $type = '';

                    //si il y a une erreur dans le formulaire
                    if(!empty($_SESSION["errors_form"])) {
                        $tab = $_SESSION["errors_form"];            // Le tableau prend le tableau des erreurs
                        $type = 'error';                            // Le type devient erreur
                        unset($_SESSION["errors_form"]);            // Je supprime le tableau d'erreur en session
                    }
                    //sinon si il y a un succes
                    elseif(!empty($_SESSION["success_form"])) {
                        $tab = $_SESSION["success_form"];           // Le tableau prend le tableau des succes
                        $type = 'success';                          // Le type devient succes
                        unset($_SESSION["success_form"]);           // Je supprime le tableau des succes de la session
                    }
                    //si mon tableau n'est pas vide
                    if(!empty($tab)) {
                        echo "<ul>";
                        foreach ($tab as $value) { echo "<li>".$submitForm[$type][$value]; }
                        echo "</ul>";
                    }
                    ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="mailLog" type="email" class="validate" name="mailUser">
                            <label for="mailLog"><?php echo $GLOBALS['LOG_IN_MAIL'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pwdLog" type="password" class="validate" name="pwd">
                            <label for="pwdLog"><?php echo $GLOBALS['LOG_IN_PWD'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <small><a href="#"><?php echo $GLOBALS['LOG_IN_FORGOTTEN'] ?></a></small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo $GLOBALS['LOG_IN_SUBMIT'] ?></button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require "footer.php" ?>
