<?php $pageTitle = "Ride";
require_once "navbar.php" ?>
<head>
    <link type="text/css" rel="stylesheet" href="css/map.css"/>
</head>
<main>
    <div class="container">
        <div class="row">
            <input id="origin-input" class="controls col s4" type="text" placeholder="Enter an origin location">
            <label for="origin-input" hidden>Origin</label>
            <input id="destination-input" class="controls col s4" type="text" placeholder="Enter a destination location">
            <label for="destination-input" hidden>Destination</label>

            <form action="#">
                <div id="mode-selector" class="controls" hidden>
                    <p>
                        <label>
                            <input id="changemode-walking" type="radio" name="type" class="with-gap" checked />
                            <span>Walking</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="changemode-transit" type="radio" name="type" class="with-gap" />
                            <span>Transit</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="changemode-driving" type="radio" name="type" class="with-gap" />
                            <span>Driving</span>
                        </label>
                    </p>
                </div>
            </form>
        </div>
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
