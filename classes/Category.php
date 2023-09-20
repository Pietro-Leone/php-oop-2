<?php

class Category
{

  protected $taglia;
  protected $eta;
  protected $sterilizzato;
  protected $icon;
  
  public function __construct(){

  }

  /**
   * Get the value of icon
   */ 
  public function getIcon()
  {
    return $this->icon;
  }

  /**
   * Set the value of icon
   *
   * @return  self
   */ 
  public function setIcon($icon)
  {
    $this->icon = $icon;

    return $this;
  }
}
