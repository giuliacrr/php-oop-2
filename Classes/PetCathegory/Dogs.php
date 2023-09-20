<?php
class Dogs extends Pets {
  public $img = '<i class="fa-solid fa-dog"></i>';

  public function __construct(string $_species, string $img) {

}

public function PetSound() {
  echo "Woof woof!!!";
}

}


?>