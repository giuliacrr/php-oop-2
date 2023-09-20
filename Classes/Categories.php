<?php

class Categories {
  protected $icon;

  //Stessa domanda per il costrutto

  
//Icon
  public function getIcon()
  {
    return $this->icon;
  }
  public function setIcon($icon)
  {
    $this->icon = $icon;

    return $this;
  }
}

?>