<?php
require_once __DIR__ . '/../Categories.php';

class Dogs extends Categories {

  public function __construct(){
    $this->icon= '<i class="fa-solid fa-dog"></i>';
  }
}
?>