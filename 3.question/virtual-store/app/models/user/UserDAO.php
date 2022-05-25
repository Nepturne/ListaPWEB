<?php

require_once 'models/database/Database.php';

class UserDao
{
   private $connection;

  function __construct() {
    $db = new Database();
    $this->connection = $db->getConnection();
  }

  function insert($user) {
      $query = "INSERT INTO user_account(cpf,username,user_password) VALUES(:cpf,:username,:user_password)";

      $stmt = $this->connection->prepare($query);

      $stmt->bindValue(':cpf', $user->getCpf());
      $stmt->bindValue(':username', $user->getUsername());
      $stmt->bindValue(':user_password', $user->getPassword());
      
      return $stmt->execute();
  }
}
