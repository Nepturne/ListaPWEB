<?php

require_once 'models/database/Database.php';

class CategoryDAO {
  private $connection;

  function __construct() {
    $db = new Database();
    $this->connection = $db->getConnection();
  }

  function insert($category) {
    $query = "INSERT INTO category(alias) VALUES (:alias);";

    $stmt = $this->connection->prepare($query);

    $stmt->bindValue(':alias', $category->getAlias());

    return $stmt->execute();
  }

  function fetch() {
    $query = "SELECT * FROM category;";

    $stmt = $this->connection->prepare($query);

    $stmt->execute();

    return $stmt->fetchAll();
  }
}