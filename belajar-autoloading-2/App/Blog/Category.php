<?php

class Category {
  private $categoryName;

  public function __construct($name) {
    $this->categoryName = $name;
  }

  public function getCategoryName() {
    return $this->categoryName;
  }
}