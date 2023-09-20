<?php
require_once __DIR__ . '/../Products.php';

class Toys extends Products {
  public function __construct(string $_name, string $_price, string $_description, string $_category, string $_image) {
    $this->name=$_name;
    $this->price=$_price;
    $this->description=$_description;
    $this->category=$_category;
    $this->image=$_image;
  }
}
?>