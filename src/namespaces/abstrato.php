<?php
namespace jose\sobre\namespaces;
// Parent class
abstract class abstrato {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string;
}