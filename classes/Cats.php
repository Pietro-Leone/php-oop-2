<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../traits/Gender.php';

class Cats extends Category {
	use Gender;

  public function __construct($taglia, $eta, $sterilizzato) {

		$this->icon = '<i class="fa-solid fa-cat"></i>';
		$this->taglia = $taglia;
		$this->eta = $eta;
		$this->sterilizzato = $sterilizzato;
  }

}