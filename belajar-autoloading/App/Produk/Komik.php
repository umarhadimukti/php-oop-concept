<?php

class Komik extends Produk implements InfoProduk {
  public $jmlHalaman;
  
  public function __construct($judul, $penulis, $penerbit, $harga=0, $jmlHalaman) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfo() {
    $result = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $result;
  }

  public function getInfoProduk() {
    $result = "Komik : {$this->getInfo()} - {$this->jmlHalaman} Halaman";
    return $result;
  }
}