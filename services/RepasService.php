<?php

require_once __DIR__ . '/../models/services/Repas.php';
require_once __DIR__ . '/../utils/databases/Database.php';

class RepasService {
  private static $instance;

  public static function getInstance(): RepasService {
    if(!isset(self::$instance)){
      self::$instance = new RepasService();
    }
    return self::$instance;
  }

  public function insertRepas(Repas $repas): ?Repas {
    $manager = Database::getManager();
    $success = $manager->exec('INSERT INTO Repas (name, boisson, restaurant, price) VALUES (?,?,?,?)',
    [
      $repas->getName(),
      $repas->getBoisson(),
      $repas->getRestaurant(),
      $repas->getPrice()
    ]);
    if($success > 0 ){
      $repas->setId($manager->lastInsertId());
      return $repas;
    }
    return NULL;
  }

  public function allRepas(): array {
    $manager = Database::getManager();
    return $manager->getAll('SELECT * FROM Repas');
  }

  public function updateRepas(Repas $repas): ?Repas{
    $manager = Database::getManager();
    $success = $manager->exec('UPDATE Repas SET name = ?, boisson = ?, restaurant = ?, price = ? WHERE id = ?',
    [
      $repas->getName(),
      $repas->getBoisson(),
      $repas->getRestaurant(),
      $repas->getPrice(),
      $repas->getId()
    ]);
    if($success > 0){
      return $repas;
    }
    return NULL;
  }
}
