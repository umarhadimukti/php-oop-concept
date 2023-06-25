<?php

// require_once "./App/Produk/Produk.php";
// require_once "./App/Produk/InfoProduk.php";
// require_once "./App/Produk/CetakInfoProduk.php";
// require_once "./App/Produk/Komik.php";
// require_once "./App/Produk/Game.php";

function autoLoad($class) {
  $file = __DIR__ . "Produk/{$class}.php";
  if (is_readable($file)) {
    require $file;
  }
}

spl_autoload_register("autoLoad");