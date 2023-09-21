<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../traits/Gender.php';

class Dogs extends Category {
	use Gender;

  public function __construct(string $taglia, int $eta, bool $sterilizzato) {

		$this->icon = '<i class="fa-solid fa-dog"></i>';
		$this->taglia = $taglia;
		$this->eta = $eta;
		$this->sterilizzato = $sterilizzato;
		
  }
}
