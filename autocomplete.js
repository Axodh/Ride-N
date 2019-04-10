
// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:


var placeSearch, autocomplete, autocomplete2;

var componentForm = {
street_number: 'short_name',
route: 'long_name',
locality: 'long_name',
administrative_area_level_1: 'short_name',
country: 'long_name',
postal_code: 'short_name'
};

function initAutocomplete() {
// Create the autocomplete object, restricting the search predictions to
// geographical location types.

autocomplete = new google.maps.places.Autocomplete(
  document.getElementById('autocomplete'), {
      types: ['geocode'],
      componentRestrictions: {country: "fr"}
  });
// Avoid paying for data that you don't need by restricting the set of
// place fields that are returned to just the address components.

// autocomplete.setFields('address_components');

// When the user selects an address from the drop-down, populate the
// address fields in the form.
autocomplete.addListener('place_changed', fillInAddress);

autocomplete2 = new google.maps.places.Autocomplete(
  document.getElementById('autocomplete2'), {
      types: ['geocode'],
      componentRestrictions: {country: "fr"}
  });
  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.

  // autocomplete.setFields('address_components');

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete2.addListener('place_changed', fillInAddress);
}


function fillInAddress() {
// Get the place details from the autocomplete object.
var place = autocomplete.getPlace();
var place2 = autocomplete2.getPlace();

/*
for (var component in componentForm) {
document.getElementById(component).value = '';
document.getElementById(component).disabled = false;
}
*/

// Get each component of the address from the place details,
// and then fill-in the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      // document.getElementById(addressType).value = val;
    }
  }
}
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}

function calculate(){
  var start = document.getElementById("autocomplete");
  var arrival = document.getElementById("autocomplete2");

  var sendGgl = document.createElement("src");
  
}
