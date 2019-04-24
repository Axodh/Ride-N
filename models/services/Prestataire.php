<?php
require_once __DIR__ . '/../../utils/Validator.php';

class Prestataire implements JsonSerializable {

  private $id;
  private $profession;
  private $name;
  private $surname;
  private $date;
  private $heure;
  private $price;


  public static function PrestataireFromArray(array $data): ?Prestataire{
    if(Validator::validate($data, ['profession', 'name', 'surname', 'date', 'heure', 'price'])){
      $prestataire = new Prestataire(NULL,
                                    $data['profession'],
                                    $data['name'],
                                    $data['surname'],
                                    $data['date'],
                                    $data['heure'],
                                    $data['price']);
      if(isset($data['id'])){
        $location->setId($data['id']);
      }
      return $location;
    }
    return NULL;
  }

  public function __construct(?int $id, string $profession, string $name, string $surname, string $date, string $heure, float $price){
    $this->id = $id;
    $this->profession = $profession;
    $this->name = $name;
    $this->surname = $surname;
    $this->date = $date;
    $this->heure = $heure;
    $this->price = $price;
  }

  public function getId(): ?int { return $this->id; }
  public function getProfession(): string { return $this->profession; }
  public function getName(): string { return $this->name; }
  public function getSurname(): string { return $this->surname;  }
  public function getDate(): string { return $this->date; }
  public function getHeure(): string { return $this->heure; }
  public function getPrice(): float { return $this->price; }

  public function setId(int $id){
    $this->id = $id;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }
}
