<?php

require_once 'models/purchase/Purchase.php';
require_once 'models/purchase/PurchaseDAO.php';

class PurchaseController {
  private $purchaseDAO;

  function __construct() {
    $this->purchaseDAO = new PurchaseDAO();
  }

  function post() {
    print_r($_REQUEST);

    $purchase = new Purchase(
      0, 
      $_REQUEST['about_it'],
      $_REQUEST['payment_way'],
      $_REQUEST['product_id'],
      $_REQUEST['user_id']
    );

    if ($this->purchaseDAO->insert($purchase)) {
      echo "<p style=color:green>A compra foi bem sucedida!</p>";
    } else {
      echo "<p style=color:red>Erro ao realizar compra!</p>";
    }
  }
}