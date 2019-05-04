<?php

$departure = str_replace(' ','',$_POST["departure"]);
$arrival = str_replace(' ','',$_POST["arrival"]);

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
$res = $data->rows[0]->elements[0]->distance[0];
$res2 = $res = $data->destination_addresses[0];

?>
