<?php
class Category {
  private $id;
  private $alias;

  function __construct($id, $alias) {
    $this->id = $id;
    $this->alias = $alias;
  }

  function getID() {
    return $this->id;
  }

  function getAlias() {
    return $this->alias;
  }
}