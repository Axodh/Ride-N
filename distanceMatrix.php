<?php

require_once "functions.php";

$departure = str_replace(' ','',$_POST["departure"]);
$arrival = str_replace(' ','',$_POST["arrival"]);
$date = $_POST["date"];
$time = $_POST["time"];

if(empty($date) && empty($time)){
  echo "Choisissez une date et une heure";
}
if(empty($departure) && empty($arrival)){
  echo "Les champs sont vides";
}
if(!isConnected()){
  echo "Vous devez vous connecter pour commander";
}
if( !empty($arrival) && !empty($departure) && isConnected() && !empty($date) && !empty($time)){
  $curl = curl_init();

  curl_setopt_array($curl, [
        CURLOPT_URL => "https://maps.googleapis.com/maps/api/distancematrix/json?units=metrics&origins={$departure}&destinations={$arrival}&key=AIzaSyDR5zVA8SLCKglbDIfjmfCsFwWv4vMmpyo",
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_TIMEOUT => 1
      ]);
  $distance = curl_exec($curl);
  $data = json_decode($distance);

  curl_close($curl);
  $travelTime = $data->rows[0]->elements[0]->duration->text;
  $distance = $data->rows[0]->elements[0]->distance->text;
  echo "Commande enregistré";


  $_SESSION['departure'] = $departure;
  $_SESSION['arrival'] = $arrival;
  $_SESSION['distance'] = $distance;
  $_SESSION['travelTime'] = $travelTime;
  $_SESSION['date'] = $date;
  $_SESSION['time'] = $time;
}

?>
