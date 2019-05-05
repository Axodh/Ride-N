<?php $pageTitle = "Ride";
require_once "navbar.php" ?>
<head>
    <link type="text/css" rel="stylesheet" href="css/map.css"/>
</head>
<main>
    <div class="container">
        <div class="row">
            <input id="origin-input" class="controls col s4" type="text" placeholder="Enter an origin location">
            <input id="destination-input" class="controls col s4" type="text" placeholder="Enter a destination location">

            <div id="mode-selector" class="controls" hidden>
                <input id="changemode-walking" type="radio" name="walk" checked="checked">
                <label for="changemode-walking">Walking</label>

                <input id="changemode-transit" type="radio" name="transit">
                <label for="changemode-transit">Transit</label>

                <input id="changemode-driving" type="radio" name="drive">
                <label for="changemode-driving">Driving</label>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s9" id="map"></div>
            <div class="col s3 center">
                <div class="card-panel">
                    <div class="input-field">
                        <input id="departure" type="text" class="datepicker">
                        <label for="departure">Date</label>
                    </div><br>
                    <div class="input-field">
                        <input id="time" type="text" class="timepicker">
                        <label for="time">Time</label>
                    </div>
                    <button class="btn waves-effect waves-light" onclick="getDestinations()" type="submit" name="action">
                        Commander<i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/distanceMatrix.js"></script>
<script src="js/autocomplete.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo&libraries=places&callback=initMap" async defer></script>
<?php require_once "footer.php" ?>
