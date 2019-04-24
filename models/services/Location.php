<?php
require_once __DIR__ . '/../../utils/Validator.php';

class Location implements JsonSerializable {

  private $id;
  private $name;
  private $isRent;
  private $price;

  public static function LocationFromArray(array $data): ?Location{
    if(Validator::validate($data, ['name', 'isRent','price'])){
      $location = new Location(NULL,
                                $data['name'],
                                $data['isRent'],
                                $data['price']);
      if(isset($data['id'])){
        $location->setId($data['id']);
      }
      return $location;
    }
    return NULL;
  }

  public function __construct(?int $id, string $name, int $isRent, float $price){
    $this->id = $id;
    $this->name = $name;
    $this->isRent = $isRent;
    $this->price = $price;
  }

  public function getId(): ?int { return $this->id; }
  public function getName(): string { return $this->name; }
  public function getRent(): string { return $this->isRent; }
  public function getPrice(): float { return $this->price; }

  public function setId(int $id){
    $this->id = $id;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }
}
