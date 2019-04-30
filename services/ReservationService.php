<?php

require_once __DIR__ . '/../models/services/Reservation.php';
require_once __DIR__ . '/../utils/databases/Database.php';


class ReservationService {
  private static $instance;

  public static function getInstance(): ReservationService {
    if(!isset(self::$instance)){
      self::$instance = new ReservationService();
    }
    return self::$instance;
  }

  public function insertReservation(Reservation $reservation): ?Reservation{
    $manager = Database::getManager();
    $success = $manager->exec('INSERT INTO Reservation (name, date, heure, addr, price) VALUES (?,?,?,?,?)',
    [
      $reservation->getName(),
      $reservation->getDate(),
      $reservation->getHeure(),
      $reservation->getAddr(),
      $reservation->getPrice()
    ]);
    if($success > 0){
      $reservation->setId($manager->lastInsertId());
      return $reservation;
    }
    return NULL;
  }

  public function allReservation(): array {
    $manager = Database::getManager();
    return $manager->getAll('SELECT * FROM Reservation');
  }

  public function updateReservation(Reservation $reservation): ?Reservation{
    $manager = Database::getManager();
    $success = $manager->exec('UPDATE Reservation SET name = ?, date = ?, heure = ?, addr = ?, price = ? WHERE id = ?',
    [
      $reservation->getName(),
      $reservation->getDate(),
      $reservation->getHeure(),
      $reservation->getAddr(),
      $reservation->getPrice(),
      $reservation->getId()
    ]);
    if($success > 0){
      return $reservation;
    }
    return NULL;
  }
}
