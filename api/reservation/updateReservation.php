<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/ReservationService.php';
require_once __DIR__ . '/../../utils/Validator.php';

$body = file_get_contents('php://input');

$json = json_decode($body, true);

if(Validator::validate($json, ['id', 'name', 'date', 'heure', 'addr', 'price'])){
  $reservation = new Reservation($json['id'],
                          $json['name'],
                          $json['date'],
                          $json['heure'],
                          $json['addr'],
                          $json['price']);

$new = ReservationService::getInstance()->updateReservation($reservation);
if($new) {
    http_response_code(201);
    echo json_encode($new);
  } else {
    http_response_code(500); // fail :(
  }
} else {
  http_response_code(400);
}

?>
