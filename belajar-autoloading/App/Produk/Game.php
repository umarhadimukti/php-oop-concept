<?php

class Game extends Produk implements InfoProduk {
  public $waktuMain;
  
  public function __construct($judul, $penulis, $penerbit, $harga=0, $waktuMain) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function getInfo() {
    $result = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $result;
  }

  public function getInfoProduk() {
    $result = "Game : {$this->getInfo()} ~ {$this->waktuMain} Jam";
    return $result;
  }
}