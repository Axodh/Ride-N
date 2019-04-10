<?php require_once "navbar.php" ?>

  <main>
    <div class="container">
      <div class="row">
        <div id="locationField" class="col s6 card teal">
          <input id="autocomplete"
                 placeholder="Enter your address"
                 onFocus="geolocate()"
                 type="text"/>
        </div>

        <div id="locationField" class="col s6 card teal">
          <input id="autocomplete2"
                 placeholder="Enter your address"
                 onFocus="geolocate()"
                 type="text"/>
        </div>
      </div>
    </div>
  </main>
  <script src="autocomplete.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo&libraries=places&callback=initAutocomplete"
        async defer></script>
  <script src="https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins=Washington,DC&destinations=New+York+City,NY&key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo"></script>

  </body>


<?php require_once "footer.php" ?>
