<?php

require_once __DIR__ . '/../../utils/Validator.php';

class Pets implements JsonSerializable{
  private $id;
  private $name;
  private $date;
  private $heure;
  private $departure;
  private $arrival;
  private $price;

  private static function PetsFromArray(array $data): ?Pets{
    if(Validator::validate($data, ['name', 'date', 'heure', 'departure', 'arrival', 'price']));
    $pets = new Pets(NULL,
                    $data['name'],
                    $data['date'],
                    $data['heure'],
                    $data['departure'],
                    $data['arrival'],
                    $data['price']);
    if(isset($data['id'])){
      $pets->setId($data['id']);
    }
    return $repas;
  }

  public function __construct(?int $id, string $name, string $date, string $heure, string $departure, string $arrival, float $price){
    $this->id = $id;
    $this->name = $name;
    $this->date = $date;
    $this->heure = $heure;
    $this->departure = $departure;
    $this->arrival = $arrival;
    $this->price = $price;
  }

  public function getId(): ?int { return $this->id; }
  public function getName(): string { return $this->name; }
  public function getDate(): string { return $this->date; }
  public function getHeure(): string { return $this->heure; }
  public function getDeparture(): string { return $this->departure; }
  public function getArrival(): string { return $this->arrival; }
  public function getPrice(): float { return $this->price; }

  public function setId(int $id){
    $this->id = $id;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }
}
