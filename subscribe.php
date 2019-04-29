<?php $pageTitle = "Abonnement";
require_once "navbar.php" ?>
<main>
    <div class="container">
        <div class="row">

            <h1 class="center white-text" style="font-variant: small-caps">nos tarifs</h1>

            <div class="col s12 m4">
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

            <div class="col s12 m4">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/tree.jpg" alt="tree"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov">abonnement solo</span></div>
                    <div class="card-reveal">
                        <span class="smol center">abonnement simple</span>
                        <div class="divider"></div>
                        <p>Rejoignez la communauté Ride'N en tant que membre et bénéficiez de tarifs préférentiels !</p>
                        <div>
                            <b>Devenir membre sans engagement :</b>
                            <li>22€ TTC/mois</li><br>

                            <b>Devenir membre avec un engagement sur 12 mois :</b>
                            <li>20€ TTC / mois</li><br>

                            <b>Accès aux différents services avec un engagement 12 mois:</b>
                            <li>Services repas et boissons</li>
                            <li>Location appareils électroniques et audio-guides </li>
                            <li>Visite touristique</li>
                            <li>interprète et coachs</li>
                            <li>Pets sittings</li>
                        </div>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo "alert('Veuillez vous connecter pour commander !')" ?>">Commander</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card large sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light"><img class="activator" src="images/trees.jpg" alt="trees"></div>
                    <div class="card-content"><span class="card-title activator smol center show-hov">abonnement team</span></div>
                    <div class="card-reveal">
                        <span class="smol center">abonnement entreprise</span>
                        <div class="divider"></div>
                        <p>Rejoignez la communauté Ride'N en tant que membre entreprise et bénéficiez de tarifs préférentiels !<br>Bénéficier d'un accès privilégié en illimité 7j /7 !</p>

                        <div>
                            <b>Devenir membre entreprise sans engagement :</b>
                            <li>80 € TTC / mois pour une entreprise de - de 10 salariés</li>
                            <li>100€ TTC / mois pour une entreprise de + de 10 salariés + 15€ TTC par tranche de 10 salariés</li><br>

                            <b>Devenir membre entreprise avec engagement sur 12 mois :</b>
                            <li>65€ TTC / mois pour une entreprise de - de 10 salariés</li>
                            <li>85€ TTC / mois pour une entreprise de + de 10 salariés + 12€ TTC par tranche de 10 salariés</li>
                        </div>
                    </div>
                    <div class="card-action center">
                        <a href="#" onclick="<?php if(!isConnected()) echo "alert('Veuillez vous connecter pour commander !')" ?>">Commander</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 offset-m4 center"><a href="#" class="white-text">Tarifs valables au 06/05/19</a></div>
        </div>
    </div>
</main>
<?php require_once "footer.php" ?>
