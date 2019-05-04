
<?php
  $pageTitle = "ride";
 require_once "navbar.php" ?>

<head>
    <link type="text/css" rel="stylesheet" href="css/map.css"/>
</head>
<main>
    <div class="container">
        <div class="row">
            <input id="origin-input"  class="controls col s4" type="text"
                   placeholder="Enter an origin location">

            <input id="destination-input" class="controls col s4" type="text"
                   placeholder="Enter a destination location">

            <div id="mode-selector" class="controls" hidden>
                <input type="radio" name="type" id="changemode-walking" checked="checked">
                <label for="changemode-walking">Walking</label>

                <input type="radio" name="type" id="changemode-transit">
                <label for="changemode-transit">Transit</label>

                <input type="radio" name="type" id="changemode-driving">
                <label for="changemode-driving">Driving</label>
            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col s6" id="map">

        </div>
        <br>
        <div class="col s6 center">
          <div class="card-panel">
            <input type="text" class="datepicker" placeholder="Choisir une date" />
            <input type="text" class="timepicker">
            <button class="btn waves-effect waves-light" onclick="getDestinations()" type="submit" name="action">Commander
              <i class="material-icons right">send</i>
            </button>
          </div>

          </div>
        </div>
      </div>
    </div>


</main>
<script src="text.js"></script>
<script src="js/distanceMatrix.js"></script>
<script src="js/autocomplete.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo&libraries=places&callback=initMap" async defer></script>


</body>


  <?php require_once "footer.php" ?>
