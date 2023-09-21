<?php 
require_once __DIR__ . '/../Products.php';
require_once __DIR__ . '/../../Traits/Sizes.php';

class Foods extends Products {


  public function __construct(string $_name, $_size, string $_price, string $_description, string $_category, string $_image) {
    $this->name=$_name;
    $this->size = $_size;
    $this->price=$_price;
    $this->description=$_description;
    $this->category=$_category;
    $this->image=$_image;
  }
}
?>