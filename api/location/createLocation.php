<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/LocationService.php';
require_once __DIR__ . '/../../utils/Validator.php';

$body = file_get_contents('php://input');

$json = json_decode($body, true);

if(Validator::validate($json, ['name', 'isRent', 'price'])){
  $location = new Location(NULL,
                            $json['name'],
                            $json['isRent'],
                            $json['price']);
$new = LocationService::getInstance()->insertLocation($location);
if($new) {
    http_response_code(201);
    
  } else {
    http_response_code(500); // fail :(
  }
} else {
  http_response_code(400);
}

?>
