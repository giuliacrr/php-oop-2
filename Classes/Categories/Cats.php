<?php
require_once __DIR__ . '/../Categories.php';

class Cats extends Categories {

  public function __construct(){
    $this->icon= '<i class="fa-solid fa-cat"></i>';
  }
}
?>