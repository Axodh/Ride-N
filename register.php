<?php $back = 0; $pageTitle = "Register";
require_once "navbar.php";
unset($back); ?>
<main>
    <div class="text-center">
        <div class="container">
            <div class="row">
                <div>
                    <form method="POST" action="saveUsers.php" class="col s12">
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
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="first_name" type="text" class="validate" name="surnameUser" value="<?php echo (isset($dataForm["surnameUser"]))?$dataForm["surnameUser"]:"";?>">
                                <label for="first_name">Prénom</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="last_name" type="text" class="validate" name="nameUser" value="<?php echo (isset($dataForm["nameUser"]))?$dataForm["nameUser"]:"";?>">
                                <label for="last_name">Nom</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="number" type="text" class="validate" name="numberUser" value="<?php echo (isset($dataForm["numberUser"]))?$dataForm["numberUser"]:"";?>">
                                <label for="number">Numéro de téléphone</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="address" type="text" class="validate" name="addressUser" value="<?php echo (isset($dataForm["addressUser"]))?$dataForm["addressUser"]:"";?>">
                                <label for="address">Adresse</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="city" type="text" class="validate" name="cityUser" value="<?php echo (isset($dataForm["cityUser"]))?$dataForm["cityUser"]:"";?>">
                                <label for="city">Ville</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="zip" type="text" class="validate" name="zipCode" value="<?php echo (isset($dataForm["zipCode"]))?$dataForm["zipCode"]:"";?>">
                                <label for="zip">Code Postal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="mail" type="email" class="validate" name="mailUser" value="<?php echo (isset($dataForm["mailUser"]))?$dataForm["mailUser"]:"";?>">
                                <label for="mail">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="pwdReg1" type="password" class="validate" name="pwd">
                                <label for="pwdReg1">Mot de passe</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="pwdReg2" type="password" class="validate" name="pwd2">
                                <label for="pwdReg2">Confirmation</label>
                            </div>
                        </div>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in"/>
                                <span id="nop" style="color: #606060">I Agree with the <a href="terms.php">Terms and Conditions</a> of service.</span>
                            </label>
                        </p><br>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>
