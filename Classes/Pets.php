<?php
require_once __DIR__ . '/PetCathegory/Cats.php';
require_once __DIR__ . '/PetCathegory/Dogs.php';

class Pets {
  public $species;

public function __construct(string $_species) {
  $this->species = $_species;

}

public function PetSound() {
  echo "Pet sound!";
}
}

?>

