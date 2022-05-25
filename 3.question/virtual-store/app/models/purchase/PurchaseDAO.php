<?php

require_once 'models/database/Database.php';

class PurchaseDAO {
  private $connection;

  function __construct() {
    $db = new Database();
    $this->connection = $db->getConnection();
  }

  function insert($purchase) {
    $query = "INSERT INTO purchase(about_it, payment_way, product_id, user_id) VALUES (:about_it, :payment_way, :product_id, :user_id);";

    $stmt = $this->connection->prepare($query);

    $stmt->bindValue(':about_it', $purchase->getAboutIt());
    $stmt->bindValue(':payment_way', $purchase->getPaymentWay());
    $stmt->bindValue(':product_id', $purchase->getProductID());
    $stmt->bindValue(':user_id', $purchase->getUserID());

    return $stmt->execute();
  } 
}