<?php

require_once "./App/init.php";

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 250);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 80);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetakProduk();

// tes autoload
$autoload1 = new AutoLoad(TRUE, "Umar");
$autoload1.getInfoProduk();