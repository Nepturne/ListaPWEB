<?php
class Product {
  private $id;
  private $alias;
  private $aboutIt;
  private $price;
  private $imagePath;
  private $ncm;
  private $quantity;
  private $category;

  function __construct($id, $alias, $aboutIt, $price, $imagePath, 
                       $ncm, $quantity, $category) {
    $this->id = $id;
    $this->alias = $alias;
    $this->aboutIt = $aboutIt;
    $this->price = $price;
    $this->imagePath = $imagePath;
    $this->ncm = $ncm;
    $this->quantity = $quantity;
    $this->category = $category;
  }
  
  function getID()
  {
      return $this->id;
  }

  function getAlias()
  {
      return $this->alias;
  }

  function getAboutIt()
  {
      return $this->aboutIt;
  }

  function getPrice()
  {
      return $this->price;
  }

  function getImagePath()
  {
      return $this->imagePath;
  }

  
  function getNCM()
  {
      return $this->ncm;
  }

  function getQuantity()
  {
      return $this->quantity;
  }

  function getCategory()
  {
    return $this->category;
  }
}