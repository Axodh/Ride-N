<?php $pageTitle = "Register"; $back = 0;
require_once "navbar.php"; unset($back) ?>
<main>
    <div class="text-center">
        <div class="container">
            <div class="row">
                <h1 class="center white-text" style="font-variant: small-caps"><?php echo $GLOBALS['REGISTER_TITLE'] ?> - user</h1><br>
                <form method="POST" action="saveUsers.php" class="col s12">
                    <?php
                    $tab = [];
                    $type = '';

                    //si il y a une erreur dans le formulaire
                    if(!empty($_SESSION["errors_form"])) {
                        $tab = $_SESSION["errors_form"];            // Le tableau prend le tableau des erreurs
                        $type = 'error';                            // Le type devient erreur
                        unset($_SESSION["errors_form"]);            // Je supprime le tableau d'erreur en session
                        $dataForm = $_SESSION["data_form"];         // Je reprend le formulaire envoyé avec ses données
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
                        <div class="input-field col s4">
                            <input id="first_name" type="text" class="validate" name="surnameUser" value="<?php echo isset($dataForm["surnameUser"])? $dataForm["surnameUser"] : "" ?>">
                            <label for="first_name"><?php echo $GLOBALS['REGISTER_FIRST_NAME'] ?></label>
                        </div>
                        <div class="input-field col s4">
                            <input id="last_name" type="text" class="validate" name="nameUser" value="<?php echo isset($dataForm["nameUser"])? $dataForm["nameUser"] : "" ?>">
                            <label for="last_name"><?php echo $GLOBALS['REGISTER_LAST_NAME'] ?></label>
                        </div>
                        <div class="input-field col s4">
                            <input id="number" type="text" class="validate" name="numberUser" value="<?php echo isset($dataForm["numberUser"])? $dataForm["numberUser"] : "" ?>">
                            <label for="number"><?php echo $GLOBALS['REGISTER_NUMBER'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="address" type="text" class="validate" name="addressUser" value="<?php echo isset($dataForm["addressUser"])? $dataForm["addressUser"] : "" ?>">
                            <label for="address"><?php echo $GLOBALS['REGISTER_ADDRESS'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="city" type="text" class="validate" name="cityUser" value="<?php echo isset($dataForm["cityUser"])? $dataForm["cityUser"] : "" ?>">
                            <label for="city"><?php echo $GLOBALS['REGISTER_CITY'] ?></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="zip" type="text" class="validate" name="zipCode" value="<?php echo isset($dataForm["zipCode"])? $dataForm["zipCode"] : "" ?>">
                            <label for="zip"><?php echo $GLOBALS['REGISTER_ZIP'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="mail" type="email" class="validate" name="mailUser" value="<?php echo isset($dataForm["mailUser"])? $dataForm["mailUser"] : "" ?>">
                            <label for="mail"><?php echo $GLOBALS['REGISTER_MAIL'] ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="pwdReg1" type="password" class="validate" name="pwd">
                            <label for="pwdReg1"><?php echo $GLOBALS['REGISTER_PWD1'] ?></label>
                        </div>
                        <div class="input-field col s6">
                            <input id="pwdReg2" type="password" class="validate" name="pwd2">
                            <label for="pwdReg2"><?php echo $GLOBALS['REGISTER_PWD2'] ?></label>
                        </div>
                    </div>
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in"/>
                            <span style="color: #606060"><?php echo $GLOBALS['REGISTER_TERMS'] ?></span>
                        </label>
                    </p><br>
                    <button type="submit" class="btn btn-primary"><?php echo $GLOBALS['REGISTER_SUBMIT'] ?></button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php" ?>
