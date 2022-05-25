<?php 
class Database {
  private $username = "root";
  private $password = "12345678";
  private $database = "my_store";
  private $connection;

  function __construct() {
    $this->$connection = new PDO("mysql:host=127.0.0.1;dbname=$this->database", $this->username, $this->password);
  }

  function getConnection() {
    return $this->$connection;
  }
  
}