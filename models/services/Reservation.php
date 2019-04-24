<?php

require_once __DIR__ . '/../../utils/Validator.php';

class Reservation implements JsonSerializable {

  private $id;
  private $name;
  private $date;
  private $heure;
  private $addr;
  private $price;

  public static function ReservationFromArray(array $data): ?Reservation {
    if(Validator::validate($data, ['name', 'date', 'heure', 'addr', 'price'])){
      $reservation = new Reservation(NULL,
                                    $data['name'],
                                    $data['date'],
                                    $data['heure'],
                                    $data['addr'],
                                    $data['price']);
      if(isset($data['id'])){
        $reservation->setId($data['id']);
      }
      return $reservation;
    }
    return NULL;
  }

  public function __construct(?int $id, string $name, string $date, string $heure, string $addr, float $price){
    $this->id = $id;
    $this->name = $name;
    $this->date = $date;
    $this->heure = $heure;
    $this->addr = $addr;
    $this->price = $price;
  }

  public function getId(): ?int { return $this->id; }
  public function getName(): string { return $this->name; }
  public function getDate(): string { return $this->date; }
  public function getHeure(): string { return $this->heure; }
  public function getAddr(): string { return $this->addr; }
  public function getPrice(): float { return $this->price; }

  public function setId(int $id){
    $this->id = $id;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }
}
