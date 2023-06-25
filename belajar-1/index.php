<?php

class Hero {
  // properti
  public $nama;
  public $HP;
  public Weapon $weapon;
  public HeroEnemy $enemy;

  // constructor
  function __construct($nama, $HP, $enemy) {
    $this->nama = $nama;
    $this->HP = $HP;
    $this->enemy = $enemy;
  }

  public function equipWeapon(Weapon $weapon) {
    $this->weapon = $weapon;
    echo "==== {$this->nama} menggunakan senjata {$this->weapon->namaSenjata} ====<br>";
  }
  
  public function display(Weapon $weapon) {
     echo "Hero Pick : " . $this->nama . "<br>Health Point : " . $this->HP;
     echo "<br>Weapon : {$weapon->display()}";
     echo "<br>Counter Hero : {$this->enemy->hero}<br><br>";
  }
}

class Weapon {
  public $namaSenjata;
  public $attackPower;

  public function __construct($nama, $attackPower) {
    $this->namaSenjata = $nama;
    $this->attackPower = $attackPower;
  }

  public function display() {
    return "{$this->namaSenjata} (Attack Power {$this->attackPower})";
  }
}

class Armor {
  public $namaArmor, $defencePower;

  function __construct($nama, $defencePower) {
    $this->namaArmor = $nama;
    $this->$defencePower = $defencePower;
  }
}

class HeroEnemy {
  public $hero;

  function __construct($heroName) {
    $this->hero = $heroName;
  }
}

// counter hero
$heroEnemy1 = new HeroEnemy("Karrie");
$heroEnemey2 = new HeroEnemy("Pharsa");

// hero
$hero1 = new Hero("Balmond", 2500, $heroEnemy1);
$hero2 = new Hero("Melissa", 1400, $heroEnemey2);

// weapon
$weapon1 = new Weapon("Blade Of Despair", 1500);
$weapon2 = new Weapon("Corossiant", 1300);

// output1
$hero1->equipWeapon($weapon1);
echo $hero1->display($weapon1);

// output2
$hero2->equipWeapon($weapon2);
echo $hero2->display($weapon2);