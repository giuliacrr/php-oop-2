<?php 

trait Sizes {
  public static $S = "Small";
  public static $M = "Medium";
  public static $X = "Big";

  protected $size;

  
  public function getSize()
  {
    return $this->size;
  }
  public function setSize($size)
  {
    $this->size = $size;

    return $this;
  }
}
?>