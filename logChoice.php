<?php $pageTitle = "Log Choice";
require_once "navbar.php"; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s6">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/no-tree.jpg" alt="no-tree"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov">sans abonnement</span></div>
                    <div class="card-reveal">
                        <span class="smol">sans abonnement</span>
                        <div class="divider"></div>
                        <p>Le prix est estimé par kilomètre (TTC) à la course avec un minimum de 3€ le jour et 3,50€ la nuit.</p>
                        <p style="font-weight: bold">Accessible sans réservation ou abonnement.</p>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo "alert('Veuillez vous connecter pour commander !')" ?>">Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once "footer.php"; ?>