<?php

require_once __DIR__ . '/../models/services/Pets.php';
require_once __DIR__ . '/../utils/databases/Database.php';

class PetsService {
  private static $instance;

  public static function getInstance(): PetsService {
    if(!isset(self::$instance)){
      self::$instance = new PetsService();
    }
    return self::$instance;
  }

  public function insertPets(Pets $pets): ?Pets{
    $manager = Database::getManager();
    $success = $manager->exec('INSERT INTO Pets (name, date, heure, departure, arrival, price) VALUES (?,?,?,?,?,?)',
    [
      $pets->getName(),
      $pets->getDate(),
      $pets->getHeure(),
      $pets->getDeparture(),
      $pets->getArrival(),
      $pets->getPrice()
    ]);
    if($success > 0){
      $pets->setId($manager->lastInsertId());
      return $pets;
    }
    return NULL;
  }

  public function allPets(): array {
    $manager = Database::getManager();
    return $manager->getAll('SELECT * FROM Pets');
  }
}
