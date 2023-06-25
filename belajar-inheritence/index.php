<?php

class Product
{
  // inisialisasi properti
  public $tipe,
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalamanKomik,
    $waktuMainGame;

  // constructor
  public function __construct($judul, $penulis, $penerbit, $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalamanKomik = $jmlHalaman;
    $this->waktuMainGame = $waktuMain;
    $this->tipe = $tipe;
  }

  // method untuk menampilkan informasi dengan lengkap
  public function getInfoProduk()
  {
    $result = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $result;
  }

  // method untuk menampilkan penulis dan penerbit dari class ini
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class Komik extends Product
{
  public function getInfoProduk()
  {
    $result = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalamanKomik}";
    return $result;
  }
}

class Game extends Product
{
  public function getInfoProduk()
  {
    $result = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMainGame}";
    return $result;
  }
}

class CetakInfoProduk
{
  public function cetak(Product $produk)
  {
    $result = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $result;
  }
}

// objek1 : pemanggilan class Product
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 250, 0, "Komik");
// objek2 : pemanggilan class Product
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 75, "Game");

// pemanggilan class CetakInfoProduk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<hr>";

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
