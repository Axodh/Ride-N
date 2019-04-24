<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/RepasService.php';

echo json_encode(RepasService::getInstance()->allRepas());

?>
