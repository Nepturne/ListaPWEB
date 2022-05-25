<?php
class User {
  private $id; 
  private $cpf;
  private $username;
  private $password;

  function __construct($id, $cpf, $username,$password){
      $this->id = $id;
      $this->cpf = $cpf;
      $this->username = $username;
      $this->password = $password ;
  }

  public function getId()
  {
      return $this->id;
  }

  public function getCpf()
  {
      return $this->cpf;
  }

  public function getUsername()
  {
      return $this->username;
  }

  public function getPassword()
  {
      return $this->password;
  }
}
    