<?php

class Hero {
  public $attackPower, $defencePower, $movementSpeed;

  public function __construct($attack, $defence, $movement) {
    $this->attackPower = $attack;
    $this->defence = $defence;
    $this->movementSpeed = $movement;
  }

  public function getPower() {
    return "Default Hero Power<br>Attack : {$this->attackPower}<br>Defence : {$this->defencePower}<br>Movement Speed : {$this->movementSpeed}";
  }
}

class Layla extends Hero {
  public $namaHero, $skill1, $skill2;

  public function __construct($nama, $skill1, $skill2, $attack, $defence, $movement) {
    $this->namaHero = $nama;
    $this->skill1 = $skill1;
    $this->skill2 = $skill2;
    parent::__construct($attack, $defence, $movement);
  }

  public function sumPower($attack, $defence) {
    $this->attackPower += $attack;
    $this->defencePower += $defence;
  }

  public function getPower() {
    $result = "==== Kamu Pick {$this->namaHero} ====<br>";
    $result .= "Skill 1 : {$this->skill1}<br>";
    $result .= "Skill 2 : {$this->skill2}<br>";
    $result .= "Total Attack Power : {$this->attackPower}<br>";
    $result .= "Total Defence Power : {$this->defencePower}<br>";
    $result .= "Movement Speed : {$this->movementSpeed}<br>";
    
    return $result;
  }
}

// Objek
// (Nama, Skill1, Skill2, Attack, Defence, Movement)
$hero1 = new Layla("Layla", 270, 320, 540, 120, 35);
$hero1->sumPower(460, 180);
echo $hero1->getPower();