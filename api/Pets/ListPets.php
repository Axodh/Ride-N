<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/PetsService.php';

echo json_encode(PetsService::getInstance()->allPets());

?>
