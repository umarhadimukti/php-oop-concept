<?php

class CetakInfoProduk {
  public $daftarProduk = [];

  public function tambahProduk(Produk $produk) {
    $this->daftarProduk[] = $produk;
  }

  public function cetakProduk() {
    $result = "Daftar Produk : <br>";

    foreach($this->daftarProduk as $produk) {
      $result .= "- {$produk->getInfoProduk()} <br>";
    }
    
    return $result;
  }
}