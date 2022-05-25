<?php

require_once 'models/user/User.php';
require_once 'models/user/UserDAO.php';

class UserController {
  private $userDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
  }

  function post() {
    $user =  new User(0, $_REQUEST['cpf'], $_REQUEST['username'],$_REQUEST['user_password']);
    
    if ($this->userDAO->insert($user)) {
        echo '<p style="color:green">Usuário cadastrada com sucesso!</p>';
    } else {
        echo '<p style="color:red">Erro ao cadastrar Usuário!</p>';
    }
    }
  
}