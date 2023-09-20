<?php

class Beds extends Products {
  private $img;


public function __construct(string $_img, string $_name, string $_brand, string $_price, string $_description) {
  parent::__construct( $_name, $_brand, $_price, $_description);
  $this->img = $_img;
}

}

?>