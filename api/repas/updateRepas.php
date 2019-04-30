<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/RepasService.php';
require_once __DIR__ . '/../../utils/Validator.php';

$body = file_get_contents('php://input');

$json = json_decode($body, true);

if(Validator::validate($json, ['id', 'name', 'boisson', 'restaurant', 'price'])){
  $repas = new Repas($json['id'],
                    $json['name'],
                    $json['boisson'],
                    $json['restaurant'],
                    $json['price']);

$new = RepasService::getInstance()->updateRepas($repas);
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
