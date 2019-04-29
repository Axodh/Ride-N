<?php $pageTitle = "Services";
require_once "navbar.php"; ?>
<main>
    <div class="container">
        <form action="#">
            <div class="row"><br>
                <h2 class="col s12 m6 offset-m3 center smol white-text">nos services</h2>
            </div>
            <div class="row">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">restaurant</i>Services de repas et boisson</div>
                        <div class="collapsible-body" style="background-color: #F5F5F5">
                            <table>
                                <tr>
                                    <td width="20px"><label><input type="checkbox" class="filled-in" id="eat-1"/><span></span></label></td>
                                    <td width="800px">Menu du jour, boisson incluse (eau, soda, demi-bouteille de vin)</td>
                                    <td>20€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="eat-2"/><span></span></label></td>
                                    <td>Menu gastronomique</td>
                                    <td>50€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="eat-3"/><span></span></label></td>
                                    <td>Menu au choix parmi un ensemble de restaurants</td>
                                    <td>Prix restaurant + 17€ TTC</td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">headset</i>Locations d'audioguides et/ou appareils numériques</div>
                        <div class="collapsible-body" style="background-color: #F5F5F5">
                            <table>
                                <tr>
                                    <td width="20px"><label><input type="checkbox" class="filled-in" id="num-1"/><span></span></label></td>
                                    <td width="800px">Ordinateur portable Mac Book Air</td>
                                    <td>80€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="num-2"/><span></span></label></td>
                                    <td>Ordinateur portable Mac Book Pro</td>
                                    <td>150€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="num-3"/><span></span></label></td>
                                    <td>Ordinateur portable Windows</td>
                                    <td>60€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="num-4"/><span></span></label></td>
                                    <td>Tablette Android ou Apple</td>
                                    <td>40€ TTC</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="num-5"/><span></span></label></td>
                                    <td>Réservation audio-guides</td>
                                    <td>8€ TTC</td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">local_see</i>Préparation de visites touristiques</div>
                        <div class="collapsible-body" style="background-color: #F5F5F5">
                            <table>
                                <tr>
                                    <td width="20px"><label><input type="checkbox" class="filled-in" id="tour-1"/><span></span></label></td>
                                    <td width="800px">Réservation hôtel</td>
                                    <td>10€ TTC par personne + chambre hôtel</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="tour-2"/><span></span></label></td>
                                    <td>Achats billets touristiques</td>
                                    <td>5€ TTC par personne + prix billet</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="tour-3"/><span></span></label></td>
                                    <td>Réservation restaurant</td>
                                    <td>6€ TTC par personne</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="tour-4"/><span></span></label></td>
                                    <td>Autre</td>
                                    <td>Nous consulter</td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">language</i>Interprètes et coachs</div>
                        <div class="collapsible-body" style="background-color: #F5F5F5">
                            <table>
                                <tr>
                                    <td width="20px"><label><input type="checkbox" class="filled-in" id="lang-1"/><span></span></label></td>
                                    <td width="800px">Interprètes</td>
                                    <td>80€ TTC par heure</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="lang-2"/><span></span></label></td>
                                    <td>Coach sportif</td>
                                    <td>75€ TTC par heure</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="lang-3"/><span></span></label></td>
                                    <td>Coach culture</td>
                                    <td>120€ TTC par heure</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="lang-4"/><span></span></label></td>
                                    <td>Autre</td>
                                    <td>Nous consulter</td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">pets</i>Pet-sitting</div>
                        <div class="collapsible-body" style="background-color: #F5F5F5">
                            <table>
                                <tr>
                                    <td width="20px"><label><input type="checkbox" class="filled-in" id="pet-1"/><span></span></label></td>
                                    <td width="800px">Transport petit animal</td>
                                    <td>Prix course + 35€ TTC</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="pet-2"/><span></span></label></td>
                                    <td>Service transport vétérinaire</td>
                                    <td>Prix course + 75€ TTC par visite</td>
                                </tr>
                                <tr>
                                    <td><label><input type="checkbox" class="filled-in" id="pet-3"/><span></span></label></td>
                                    <td>Autre</td>
                                    <td>Nous consulter</td>
                                </tr>
                            </table>
                        </div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</main>
<?php require_once "footer.php" ?>
