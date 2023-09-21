<?php

trait Gender {
  public static $male = '<i class="fa-solid fa-mars" style="color: #004080;"></i>';
  public static $female = '<i class="fa-solid fa-venus" style="color: #ff80c0;"></i>';

  protected $gender;

  /**
   * Get the value of gender
   */ 
  public function getGender()
  {
    return $this->gender;
  }

  /**
   * Set the value of gender
   *
   * @return  self
   */ 
  public function setGender($gender)
  {
    $this->gender = $gender;

    return $this;
  }
}