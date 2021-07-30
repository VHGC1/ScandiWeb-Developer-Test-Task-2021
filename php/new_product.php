<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. '/objects/product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

if ($_GET) {
  $product->sku = $_GET['sku'];
  $product->name = $_GET['name'];
  $product->price = number_format((float)$_GET['price'],2);
  $product->type = $_GET['Type-Switcher'];
  $product->attribute = $_GET['attribute'];

  if ($product->create()) {
    header('Location: /index.php');
  } else {
    header('Location: /add-product.html');
  }
}

