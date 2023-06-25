<?php

function autoloadProduk($class) {
  $class = explode("\\", $class);
  $class = end($class);
  $file = __DIR__ . "/Produk/" . $class . ".php";
  if (is_readable($file)) {
    require $file;
  }
}

function autoloadService($class) {
  $class = explode("\\", $class);
  $class = end($class);
  $file = __DIR__ . "/Service/" . $class . ".php";
  if (is_readable($file)) {
    require $file;
  }
}

spl_autoload_register("autoloadProduk");
spl_autoload_register("autoloadService");