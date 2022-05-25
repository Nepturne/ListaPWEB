<?php

require_once 'models/product/ProductDAO.php';
require_once 'models/product/Product.php';

class ProductController {
  private $productDAO;

  function __construct() {
    $this->productDAO = new ProductDAO();
  }

  function post() {
    $product = new Product(
      0,
      $_REQUEST['alias'],
      $_REQUEST['about_it'],
      $_REQUEST['price'],
      $_REQUEST['image_path'],
      $_REQUEST['ncm'],
      $_REQUEST['quantity'],
      $_REQUEST['category']
    );

    if ($this->productDAO->insert($product)) {
      echo '<p style="color:green">Produto cadastrado com sucesso!</p>';
    } else {
      echo '<p style="color:red">Erro ao cadastrar produto!</p>';
    }
  }

  function getAll() {
    $_REQUEST['products'] = $this->productDAO->fetchAll();
  }
}