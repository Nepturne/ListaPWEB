<?php

require_once 'models/database/Database.php';

class ProductDAO {
  private $connection;

  function __construct() {
    $db = new Database();
    $this->connection = $db->getConnection();
  }

  function insert($product) {
    $query = "INSERT INTO product(alias, about_it, price, image_path, ncm, quantity, category_id) VALUES (:alias, :about_it, :price, :image_path, :ncm, :quantity, :category_id);";

    $stmt = $this->connection->prepare($query);

    $stmt->bindValue(':alias', $product->getAlias());
    $stmt->bindValue(':about_it', $product->getAboutIt());
    $stmt->bindValue(':price', $product->getPrice());
    $stmt->bindValue(':image_path', $product->getImagePath());
    $stmt->bindValue(':ncm', $product->getNCM());
    $stmt->bindValue(':quantity', $product->getQuantity());
    $stmt->bindValue(':category_id', $product->getCategory());

    return $stmt->execute();
  }

  function fetchAll() {
    $query = "SELECT * FROM product;";

    $stmt = $this->connection->prepare($query);

    return $stmt->fetchAll();
  }
}