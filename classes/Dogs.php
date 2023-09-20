<?php
require_once __DIR__ . '/Category.php';

class Dogs extends Category {

  public function __construct(string $taglia, int $eta, bool $sterilizzato) {

		$this->icon = '<i class="fa-solid fa-dog"></i>';
		$this->taglia = $taglia;
		$this->eta = $eta;
		$this->sterilizzato = $sterilizzato;
		
  }
}
