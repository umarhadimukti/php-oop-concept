<?php

// Parent Class
class Produk {
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul, $penulis, $penerbit, $harga=0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "{$this->penulis}, {$this->penerbit}";
  }

  public function getInfoProduk() {
    return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  }
}

// Child Class Of Produk
class Komik extends Produk {
  public $jmlHalamanKomik;

  public function __construct($judul, $penulis, $penerbit, $harga=0, $jmlHalaman) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalamanKomik = $jmlHalaman;
  }

  public function getInfoProduk() {
    return "Game : " . parent::getInfoProduk() . " - {$this->jmlHalamanKomik} Halaman.";
  }
}

// Child Class Of Produk
class Game extends Produk {
  public $waktuMainGame;

  public function __construct($judul, $penulis, $penerbit, $harga=0, $waktuMain) {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMainGame = $waktuMain;
  }

  public function getInfoProduk() {
    return "Komik : " . parent::getInfoProduk() . " ~ {$this->waktuMainGame} Jam.";
  }
}

// Class
class cetakInfoProduk {
  public function cetak(Produk $produk) {
    return "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
  }
}

// Object
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 250);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 25000, 87);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();