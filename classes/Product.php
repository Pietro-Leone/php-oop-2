<?php
class Product
{

  protected $nome;
  protected $categoria;
  protected $descrizione;
  protected $prezzo;
  protected $img;

  public function __construct()
  {
  }

  // Getter & Setter

  /**
   * Get the value of nome
   */
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of descrizione
   */
  public function getDescrizione()
  {
    return $this->descrizione;
  }

  /**
   * Set the value of descrizione
   *
   * @return  self
   */
  public function setDescrizione($descrizione)
  {
    $this->descrizione = $descrizione;

    return $this;
  }

  /**
   * Get the value of categoria
   */ 
  public function getCategoria()
  {
    return $this->categoria;
  }

  /**
   * Set the value of categoria
   *
   * @return  self
   */ 
  public function setCategoria($categoria)
  {
    $this->categoria = $categoria;

    return $this;
  }

  /**
   * Get the value of img
   */ 
  public function getImg()
  {
    return $this->img;
  }

  /**
   * Set the value of img
   *
   * @return  self
   */ 
  public function setImg($img)
  {
    $this->img = $img;

    return $this;
  }
}
