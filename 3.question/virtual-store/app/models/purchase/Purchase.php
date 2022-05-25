<?php
class Purchase {
  private $id;
  private $aboutIt;
  private $paymentWay;
  private $productID;
  private $userID;

  function __construct($id, $aboutIt, $paymentWay, 
                       $productID, $userID) {
    $this->id = $id;
    $this->aboutIt = $aboutIt;
    $this->paymentWay = $paymentWay;
    $this->productID = $productID;
    $this->userID = $userID;
  }

  function getID() {
    return $this->id;
  }

  function getAboutIt() {
    return $this->aboutIt;
  }

  function getPaymentWay() {
    return $this->paymentWay;
  }

  function getProductID() {
    return $this->productID;
  }

  function getUserID() {
    return $this->userID;
  }
}