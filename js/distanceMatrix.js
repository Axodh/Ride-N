function getDestinations(){

  var departure = document.getElementById('origin-input').value;
  var arrival = document.getElementById('destination-input').value;

  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 && request.status == 200){
        document.getElementById("display").innerHTML = this.responseText;
        console.log(arrival);
    }
  };
  request.open('POST', 'distanceMatrix.php');
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  request.send(`departure=${departure}&arrival=${arrival}`);

}
