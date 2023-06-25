<?php

class AutoLoad implements InfoProduk {
  private $auto, $name;

  public function __construct($auto, $name) {
    $this->auto = $auto;
    $this->name = $name;
  }

  public function getInfoProduk() {
    return "Ini adalah method untuk mendapatkan Informasi yang lengkap seputar produk yang sedang dijual";
  }
}