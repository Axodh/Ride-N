<?php
$pageTitle = 'Shopping Cart';
require_once 'navbar.php';

$departure = str_replace(',', ', ', $_SESSION["departure"]);
$arrival = str_replace(',', ', ', $_SESSION["arrival"]);
$travelTime = str_replace('hours', 'heures',$_SESSION["travelTime"]);
$price = str_replace('km','',$_SESSION["distance"]);
settype($price, 'int');
$farePrice = $price*3;
?>


<main>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content center">
            <h2>Récapitulatif de commande</h2>
          </div>
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a href="#test4">Trajet</a></li>
              <li class="tab"><a href="#test5">Test 2</a></li>
              <li class="tab"><a href="#test6">Test 3</a></li>
            </ul>
          </div>
          <div class="card-content grey lighten-4">
            <div id="test4">
              <h3>Récapitulatif du trajet</h3>
              <div>
                <ul>
                  <li>Départ prévu à <?=$departure ?> à <?=$_SESSION["time"] ?> </li>
                  <li>Arrivé <?=$arrival ?> </li>
                  <li>Durée du trajet <?=$travelTime?> </li>
                  <li>Distance <?=$_SESSION["distance"]?> </li>
                  <li>Prix <?=$farePrice ?> €</li>
              </div>
            </div>
            <div id="test5">Test 2</div>
            <div id="test6">Test 3</div>
          </div>
        </div>
      </div>
  </div>
</main>
<script type="text/javascript" src="js/shoppingCart.js"></script>
<?php
require_once 'footer.php';
?>
