<?php

require_once __DIR__ . '/../models/services/Prestataire.php';
require_once __DIR__ . '/../utils/databases/Database.php';

class PrestataireService {
  private static $instance;

  public static function getInstance(): PrestataireService {
    if(!isset(self::$instance)){
      self::$instance = new PrestataireService();
    }
    return self::$instance;
  }

  public function insertPrestataire(Prestataire $prestataire): ?Prestataire{
    $manager = Database::getManager();
    $succes = $manager->exec('INSERT INTO Prestataire (profession, name, surname, date, heure, price) VALUES (?,?,?,?,?,?)',
    [
      $prestataire->getProfession(),
      $prestataire->getName(),
      $prestataire->getSurname(),
      $prestataire->getDate(),
      $prestataire->getHeure(),
      $prestataire->getPrice()
    ]);
    if($succes > 0){
      $prestataire->setId($manager->lastInsertId());
      return $prestataire;
    }
    return NULL;
  }

  public function allPrestataire(): array {
    $manager = Database::getManager();
    return $manager->getAll('SELECT * FROM Prestataire');
  }
}
