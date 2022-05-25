<?php

require_once 'models/category/CategoryDAO.php';
require_once 'models/category/Category.php';

class CategoryController {
  private $categoryDAO;

  function __construct() {
    $this->categoryDAO = new CategoryDAO();
  }

  function post() {
    $category = new Category(0, $_REQUEST['alias']);

    if ($this->categoryDAO->insert($category)) {
      echo '<p style="color:green">Categoria cadastrada com sucesso!</p>';
    } else {
      echo '<p style="color:red">Erro ao cadastrar categoria!</p>';
    }
  }
}