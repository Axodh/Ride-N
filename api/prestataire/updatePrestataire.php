<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/PrestataireService.php';
require_once __DIR__ . '/../../utils/Validator.php';

$body = file_get_contents('php://input');

$json = json_decode($body, true);

if(Validator::validate($json, ['id', 'profession', 'name', 'surname', 'date', 'heure', 'price'])){
  $prestataire = new Prestataire($json['id'],
                              $json['profession'],
                              $json['name'],
                              $json['surname'],
                              $json['date'],
                              $json['heure'],
                              $json['price']);

$new = PrestataireService::getInstance()->updatePrestataire($prestataire);
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
