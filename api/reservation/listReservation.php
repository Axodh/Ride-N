<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../../services/ReservationService.php';

echo json_encode(ReservationService::getInstance()->allReservation());

?>
