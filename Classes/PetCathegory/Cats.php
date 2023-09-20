<?php
class Cats extends Pets {
  public $breed;
  public $size;
  public $color;
  public $lifespan;
  public $grooming;
  public $diet;
  public $temperament;

  public function __construct(string $_species, string $_name, $_age, $_breed, $_temperament) {
    parent::__construct($_species, $_name, $_age);
    $this->breed = $_breed;
    $this->temperament = $_temperament;
}

public function PetSound() {
  echo "Meow meow!!!";
}

}


?>
