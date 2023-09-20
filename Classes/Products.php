<?php
require_once __DIR__ . '/Products/Beds.php';
require_once __DIR__ . '/Products/Food.php';
require_once __DIR__ . '/Products/Toys.php';

class Products {
  private $name;
  private $brand;
  private $description;
  private $price;
  private $weight;
  private $materials;
  private $warranty;
  private $certification;
  private $expiration;

public function __construct(string $_name, string $_brand, string $_price, string $_description) {
  $this->name = $_name;
  $this->brand = $_brand;
  $this->price = $_price;
  $this->description = $_description;
}

public function buyIt(){
  return $this->price . ', Buy it now!';
}
}

$toy1 = new Toys("https://ae01.alicdn.com/kf/Sea3f928c25e349968ec75454d3ddd8c5N.jpg_640x640Q90.jpg_.webp","Squeeker", "Chew-in", "13.00", "With Squeeker your pet won't stop bothering you chewing on it and squeeking it in the middle of the night.");
$food1 = new Food("https://cdn.shopify.com/s/files/1/1407/3744/articles/Harmful_ingredients_in_dog_treats_5961.jpg?v=1647036231", "Bones", "Chew-in", "7.99", "Make your pet happy with this little but delicious treat!");
$bed1 = new Beds("https://m.media-amazon.com/images/I/71pAU-L0S6L.jpg", "Snoozer", "MyPetFriend", "49.99", "The comfiest of the beds for your pet to snooze on!");
?>