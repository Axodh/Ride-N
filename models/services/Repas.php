<?php

require_once __DIR__ . '/../../utils/Validator.php';

class Repas implements JsonSerializable{
  private $id;
  private $name;
  private $boisson;
  private $restaurant;
  private $price;

  public static function RepasFromArray(array $data): ? Repas{
    if(Validator::validate($data, ['name', 'boisson', 'restaurant', 'price']));
    $repas = new Repas (NULL,
                        $data['name'],
                        $data['boisson'],
                        $data['restaurant'],
                        $data['price']);
    if(isset($data['id'])){
      $repas->setId($data['id']);
    }
    return $repas;
  }

  public function __construct(?int $id, string $name, string $boisson, string $restaurant, float $price){
    $this->id = $id;
    $this->name = $name;
    $this->boisson = $boisson;
    $this->restaurant = $restaurant;
    $this->price = $price;
  }

  public function getId(): ?int { return $this->id; }
  public function getName(): string { return $this->name; }
  public function getBoisson(): string { return $this->boisson; }
  public function getRestaurant(): string { return $this->restaurant; }
  public function getPrice(): float { return $this->price; }

  public function setId(int $id){
    $this->id = $id;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }
}
