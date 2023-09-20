<?php
require_once __DIR__ . '/Product.php';

class Cuccia extends Product {

  public function __construct(string $nome, string $categoria, string $descrizione, string $prezzo, string $img) {

		$this->img = $img;
		$this->nome = $nome;
		$this->categoria = $categoria;
		$this->descrizione = $descrizione;
		$this->prezzo = $prezzo;
  }

}