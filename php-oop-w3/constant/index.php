<?php

class Burung {
  public $namaBurung;
  public $warna;
  public $kicau;
  const SAYAP = 2;

  public function __construct($nama, $warna, $kicau) {
    $this->namaBurung = $nama;
    $this->warna = $warna;
    $this->kicau = $kicau;
  }

  public function getDetailBurung() {
    return self::SAYAP;
  }
}

class Kenari extends Burung {
  public $nama, $warna;

  public function __construct($nama, $warna, $kicau) {
    parent::__construct($nama, $warna, $kicau);
  }

  public function getDetailKenari() {
    return parent::SAYAP;
  }
}

$burung1 = new Burung("Kenari", "Kuning", "Tututitiw");
echo $burung1->getDetailBurung();

echo "<br>";  

$kenari1 = new Kenari("Kenari", "Kuning", "Titiw");
echo $kenari1->getDetailKenari();