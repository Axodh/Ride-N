<?php $pageTitle = "Type de connexion";
require_once "navbar.php";
$reg_content_driver = "Enregistrez vous en tant que driver";
$reg_content_user = "Enregistrez vous en tant qu'user";
$log_content_driver = "Connectez vous en tant que driver";
$log_content_user = "Connectez vous en tant qu'user"?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps">enregistrez-vous</h1><br>

            <div class="col s6">
                <div class="card hoverable">
                    <div class="card-image"><img src="images/driver.jpg" alt="driver"></div>
                    <div class="card-content center">
                        <p><?php echo $reg_content_driver ?></p>
                    </div>
                    <div class="card-action center"><a href="">Je suis un Driver</a></div>
                </div>
            </div>

            <div class="col s6">
                <div class="card hoverable">
                    <div class="card-image"><img src="images/passenger.jpg" alt="passenger"></div>
                    <div class="card-content center">
                        <p><?php echo $reg_content_user ?></p>
                    </div>
                    <div class="card-action center"><a href="#">Je suis un User</a></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>