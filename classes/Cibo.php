<?php
require_once __DIR__ . '/Product.php';
class Cibo extends Product
{

	public function __construct(string $nome, string $_categoria, string $descrizione, string $prezzo, string $img)
	{

		$this->img = $img;
		$this->nome = $nome;
		$this->categoria = $_categoria;
		$this->descrizione = $descrizione;
		$this->prezzo = $prezzo;
	}
}
