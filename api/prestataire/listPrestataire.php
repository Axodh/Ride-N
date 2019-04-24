<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/PrestatiareService.php';

echo json_encode(PrestataireService::getInstance()->allPrestataire());

?>
