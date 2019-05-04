<?php
$GLOBALS['INDEX_TITLE'] = "Ride'N";
$GLOBALS['INDEX_SUBTITLE'] = "Ça passe crème.";
$GLOBALS['INDEX_COMMAND_BUTTON'] = "COMMANDER";

$GLOBALS['LANG_TITLE'] = "langue du site";
$GLOBALS['LANG_FR'] = "Français";
$GLOBALS['LANG_EN'] = "Anglais";
$GLOBALS['LANG_ES'] = "Espagnol";

$GLOBALS['NAV_SUBSCRIBE'] = "abonnements";
$GLOBALS['NAV_SERVICES'] = "services";
$GLOBALS['NAV_DEMO'] = "demo";
$GLOBALS['NAV_HELLO'] = "hello";
$GLOBALS['LOG_CHOICE_DRIVER'] = "je suis un Driver";
$GLOBALS['LOG_CHOICE_USER'] = "je suis un User";

$GLOBALS['LOG_IN_TITLE'] = "connexion";
$GLOBALS['LOG_IN_MAIL'] = "Email";
$GLOBALS['LOG_IN_PWD'] = "Mot de passe";
$GLOBALS['LOG_IN_FORGOTTEN'] = "Mot de passe oublié ?";
$GLOBALS['LOG_IN_SUBMIT'] = "se connecter";

$GLOBALS['REGISTER_TITLE'] = "enregistrement";
$GLOBALS['REGISTER_FIRST_NAME'] = "Prénom";
$GLOBALS['REGISTER_LAST_NAME'] = "Nom";
$GLOBALS['REGISTER_NUMBER'] = "Numéro de téléphone";
$GLOBALS['REGISTER_ADDRESS'] = "Adresse";
$GLOBALS['REGISTER_CITY'] = "Ville";
$GLOBALS['REGISTER_ZIP'] = "Code postal";
$GLOBALS['REGISTER_MAIL'] = "Email";
$GLOBALS['REGISTER_PWD1'] = "Mot de passe";
$GLOBALS['REGISTER_PWD2'] = "Confirmation de mot de passe";
$GLOBALS['REGISTER_TERMS'] = "Je suis d'accord avec les <a href='terms.php'>Termes & Conditions</a> de service.";
$GLOBALS['REGISTER_SUBMIT'] = "s'enregistrer";

$GLOBALS['LOG_OUT_TITLE'] = "se déconnecter";

$GLOBALS['SUBSCRIBE_TITLE'] = "nos abonnements";
$GLOBALS['SUBSCRIBE_NO_SUB_TITLE'] = "sans abonnement";
$GLOBALS['SUBSCRIBE_SIMPLE_SUB_TITLE'] = "abonnement solo";
$GLOBALS['SUBSCRIBE_TEAM_SUB_TITLE'] = "abonnement équipe";
$GLOBALS['SUBSCRIBE_ALERT'] = "alert('Veuillez vous connecter pour commander !')";
$GLOBALS['SUBSCRIBE_PRICES'] = "Tarifs valables au 06/05/19";

$GLOBALS['SUBSCRIBE_CARD_1_CONTENT'] = "<p>Le prix est estimé par kilomètre (TTC) à la course avec un minimum de 3€ le jour et 3,50€ la nuit.</p>
                                        <p style=\"font-weight: bold\">Accessible sans réservation ou abonnement.</p>";

$GLOBALS['SUBSCRIBE_CARD_2_CONTENT'] = "<p>Rejoignez la communauté Ride'N en tant que membre et bénéficiez de tarifs préférentiels !</p>
                                        <div>
                                            <b>Devenir membre sans engagement:</b>
                                            <li>22€ TTC / mois</li><br>

                                            <b>Devenir membre avec un engagement sur 12 mois:</b>
                                            <li>20€ TTC / mois</li><br>

                                            <b>Accès aux différents services avec un engagement 12 mois:</b>
                                            <li>Services repas et boissons</li>
                                            <li>Location appareils électroniques et audio-guides</li>
                                            <li>Visite touristique</li>
                                            <li>interprète et coachs</li>
                                            <li>Pets sittings</li>
                                        </div>";

$GLOBALS['SUBSCRIBE_CARD_3_CONTENT'] = "<p>Rejoignez la communauté Ride'N en tant que membre entreprise et bénéficiez de tarifs préférentiels !<br>Bénéficiez d'un accès privilégié en illimité 7j /7 !</p>
                                        <div>
                                            <b>Devenir membre entreprise sans engagement:</b>
                                            <li>80€ TTC / mois pour une entreprise de - de 10 salariés</li>
                                            <li>100€ TTC / mois pour une entreprise de + de 10 salariés + 15€ TTC par tranche de 10 salariés</li><br>

                                            <b>Devenir membre entreprise avec engagement sur 12 mois:</b>
                                            <li>65€ TTC / mois pour une entreprise de - de 10 salariés</li>
                                            <li>85€ TTC / mois pour une entreprise de + de 10 salariés + 12€ TTC par tranche de 10 salariés</li>
                                        </div>";

$GLOBALS['SAVE_BACK'] = "Veuillez revenir à la page précédente.";
$GLOBALS['SAVE_WARN'] = "Vous n'avez pas rempli tous les champs !";

$GLOBALS['TERMS_FOOTER'] = "revenir à l'accueil";

$GLOBALS['FOOTER_STUFF'] = "autre";
$GLOBALS['FOOTER_TEAM'] = "equipe";
$GLOBALS['FOOTER_TERMS'] = "termes";
$GLOBALS['FOOTER_LANG'] = "lang";

$submitForm = [
    'error' =>  [
        1=>"Le nom doit faire entre 2 et 50 caractères.",
        2=>"Le prénom doit faire entre 2 et 50 caractères.",
        3=>"L'email ne correspond pas au format demandé.",
        4=>"Le mot de passe doit faire entre 8 et 64 caractères.",
        5=>"Les mots de passe ne correspondent pas.",
        6=>"L'email existe déjà.",
        7=>"Les identifiants ne sont pas valides.",
        8=>"Le compte à été supprimé.",
        10=>"L'adresse doit faire entre 2 et 70 caractères.",
        11=>"La ville doit faire entre 2 et 50 caractères.",
        12=>"Le Code postal est incorrect.",
        13=>"Le numéro n'existe pas.",
    ],
    'success' => []
];
