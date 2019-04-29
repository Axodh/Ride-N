<?php $pageTitle = "Log In"; require_once "navbar.php"; ?>
<main>
    <div class="py-5 text-center">
        <div class="container h-75">
            <div class="row mt-5" style="">
                <div class="mx-auto col-md-6 col-10 bg-white p-5">
                    <h1 class="mb-4"></h1>
                    <form method="POST" action="connexionVerif.php" class="col s12">
                        <?php
                        $tab = [];
                        $type = '';

                        //si il y a une erreur dans le formulaire
                        if( !empty($_SESSION["errors_form"]) ){

                            //le tableau prend le tableau des erreurs
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
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="mailLog" type="email" class="validate" name="mailUser">
                                <label for="mailLog">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="pwdLog" type="password" class="validate" name="pwd">
                                <label for="pwdLog">Mot de passe</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <small><a href="#">Mot de passe oublié ?</a></small>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require "footer.php" ?>
