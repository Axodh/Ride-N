<?php

require_once __DIR__ . '/../models/services/Location.php';
require_once __DIR__ . '/../utils/databases/Database.php';

class LocationService {
  private static $instance;

  public static function getInstance(): LocationService {
    if(!isset(self::$instance)){
      self::$instance = new LocationService();
    }
    return self::$instance;
  }

  public function insertLocation(Location $location): ?Location{
    $manager = Database::getManager();
    $success = $manager->exec('INSERT INTO Location (name, isRent, price) VALUES (?,?,?)',
    [
      $location->getName(),
      $location->getRent(),
      $location->getPrice()
    ]);
    if($success > 0){
      $location->setId($manager->lastInsertId());
      return $location;
    }
    return NULL;
  }

  public function allLocation(): array {
    $manager = Database::getManager();
    return $manager->getAll('SELECT * FROM Location');
  }

  public function updateLocation(Location $location): ?Location{
    $manager = Database::getManager();
    $succes = $manager->exec('UPDATE location SET name = ?, isRent = ?, price = ? WHERE id = ?',
    [
      $location->getName(),
      $location->getRent(),
      $location->getPrice(),
      $location->getId()

    ]);
    if($succes > 0){
      return $location;
    }
    return NULL;
  }



}
