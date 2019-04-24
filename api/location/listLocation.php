<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/LocationService.php';

echo json_encode(LocationService::getInstance()->allLocation());

?>
