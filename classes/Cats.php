<?php
require_once __DIR__ . '/Category.php';

class Cats extends Category {

  public function __construct($taglia, $eta, $sterilizzato) {

		$this->icon = '<i class="fa-solid fa-cat"></i>';
		$this->taglia = $taglia;
		$this->eta = $eta;
		$this->sterilizzato = $sterilizzato;
  }

}