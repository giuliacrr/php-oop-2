<?php 
require_once __DIR__ . '/../Traits/Sizes.php';
class Products {
  use Sizes;
  protected $name;
  protected $price;
  protected $description;
  protected $category;
  protected $image;

 //CHIEDI FLORIAN - Posso anche non metterlo se vuoto?
 // public function __construct()
 //{
 // }

 //Name
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  //Price 
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  //Description
  public function getDescription()
  {
    return $this->description;
  }
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  //Category 
  public function getCategory()
  {
    return $this->category;
  }
  public function setCategory($category)
  {
    $this->category = $category;

    return $this;
  }

  //Image 
  public function getImage()
  {
    return $this->image;
  }
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }
}





?>