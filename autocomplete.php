<?php require_once "navbar.php" ?>
<head>
    <link type="text/css" rel="stylesheet" href="css/map.css"/>
</head>
<main>
    <div class="container">
        <div class="row">
            <input id="origin-input" class="controls col s6" type="text"
                   placeholder="Enter an origin location">

            <input id="destination-input" class="controls col s6" type="text"
                   placeholder="Enter a destination location">

            <div id="mode-selector col s2" class="controls" hidden>
                <input type="radio" name="type" id="changemode-walking" checked="checked">
                <label for="changemode-walking">Walking</label>

                <input type="radio" name="type" id="changemode-transit">
                <label for="changemode-transit">Transit</label>

                <input type="radio" name="type" id="changemode-driving">
                <label for="changemode-driving">Driving</label>
            </div>
        </div>
    </div>

    <div id="map" class="container"></div>

</main>
<script src="js/autocomplete.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo&libraries=places&callback=initMap" async defer></script>


</body>


<?php require_once "footer.php" ?>
