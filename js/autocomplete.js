document.addEventListener('DOMContentLoaded', function() {
  var hours = new Date().getHours();
  var minutes = new Date().getMinutes();
  var time = hours + ":" + minutes;

  var options = {
    defaultDate: Date.now(),
    minDate: new Date(Date.now()),
    onClose:  () => {
      var pickedTime = document.querySelector('.timepicker').value;
      var pickedDate = document.querySelector('.datepicker').value;
      var arrayTime = pickedTime.split(':');

      var actualDate = new Date(Date.now());
      actualDate = actualDate.toDateString();

      var actualHours = new Date().getHours();
      var actualMinutes = new Date().getMinutes();

      var arrayActualDate = actualDate.split(' ');
      arrayActualDate.splice(0,1);
      pickedDate = pickedDate.replace(',','');

      var arrayPickedDate = pickedDate.split(' ');

      if(arrayActualDate[0] == arrayPickedDate[0] && arrayActualDate[1] == arrayPickedDate[1] && arrayActualDate[2] == arrayPickedDate[2]){
        if(arrayTime[0] <= actualHours && arrayTime[1] <= actualMinutes){
          alert("You cannot go from the past!");
          document.querySelector('.timepicker').value = time;
        }
      }
    }
  };
  var elems = document.querySelectorAll('.datepicker');
  var instances = M.Datepicker.init(elems, options);
});

document.addEventListener('DOMContentLoaded', function() {
  var hours = new Date().getHours();
  var minutes = new Date().getMinutes();
  var time = hours + ":" + minutes;

  var options = {
    defaultTime: time,
    twelveHour: false,
    onCloseEnd: () => {
      var pickedTime = document.querySelector('.timepicker').value;
      var pickedDate = document.querySelector('.datepicker').value;
      var arrayTime = pickedTime.split(':');

      var actualDate = new Date(Date.now());
      actualDate = actualDate.toDateString();

      var actualHours = new Date().getHours();
      var actualMinutes = new Date().getMinutes();

      var arrayActualDate = actualDate.split(' ');
      arrayActualDate.splice(0,1);
      pickedDate = pickedDate.replace(',','');

      var arrayPickedDate = pickedDate.split(' ');

      if (arrayActualDate[0] == arrayPickedDate[0] && arrayActualDate[1] == arrayPickedDate[1] && arrayActualDate[2] == arrayPickedDate[2]){
        if(arrayTime[0] <= actualHours && arrayTime[1] <= actualMinutes){
          alert("Vous ne pouvez pas choisir une heure antérieur à l'heure actuelle");
          document.querySelector('.timepicker').value = time;
        }
      }
    }
  };

  var elems = document.querySelectorAll('.timepicker');
  var instances = M.Timepicker.init(elems, options);
});

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    mapTypeControl: false,
    center: {lat: 48.87905, lng: 2.29232},
    zoom: 10
  });

  new AutocompleteDirectionsHandler(map);
}

/**
 * @constructor
 */
function AutocompleteDirectionsHandler(map) {
  this.map = map;
  this.originPlaceId = null;
  this.destinationPlaceId = null;
  this.travelMode = 'WALKING';
  this.directionsService = new google.maps.DirectionsService;
  this.directionsDisplay = new google.maps.DirectionsRenderer;
  this.directionsDisplay.setMap(map);

  var originInput = document.getElementById('origin-input');
  var destinationInput = document.getElementById('destination-input');
  var modeSelector = document.getElementById('mode-selector');

  var originAutocomplete = new google.maps.places.Autocomplete(originInput);
  // Specify just the place data fields that you need.
  originAutocomplete.setFields(['place_id']);

  var destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
  // Specify just the place data fields that you need.
  destinationAutocomplete.setFields(['place_id']);

  this.setupClickListener('changemode-walking', 'WALKING');
  this.setupClickListener('changemode-transit', 'TRANSIT');
  this.setupClickListener('changemode-driving', 'DRIVING');

  this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
  this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
}

// Sets a listener on a radio button to change the filter type on Places
// Autocomplete.
AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
  var radioButton = document.getElementById(id);
  var me = this;

  radioButton.addEventListener('click', function() {
    me.travelMode = mode;
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
  autocomplete.bindTo('bounds', this.map);
  var me = this;

  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();

    if (!place.place_id) {
      window.alert('Please select an option from the dropdown list.');
      return;
    }

    if (mode === 'ORIG') me.originPlaceId = place.place_id;
    else me.destinationPlaceId = place.place_id;
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.route = function() {
  if (!this.originPlaceId || !this.destinationPlaceId) return;
  var me = this;

  this.directionsService.route(
      {
        origin: {'placeId': this.originPlaceId},
        destination: {'placeId': this.destinationPlaceId},
        travelMode: this.travelMode
      },
      function(response, status) {
        if (status === 'OK')  me.directionsDisplay.setDirections(response);
        else window.alert('Directions request failed due to ' + status);
      });
};
