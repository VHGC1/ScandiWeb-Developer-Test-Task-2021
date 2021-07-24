<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. '/objects/product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);




if ($_GET) {
  //$product->table_name = $_GET['Type-Switcher'];
  //$product->sku = $_GET['sku'];
  //$product->name = $_GET['name'];
  //$product->price = number_format((float)$_GET['price'],2);

  echo $_GET['sku'];
  echo $_GET['name'];
  echo number_format((float)$_GET['price'],2);
  echo $_GET['Type-Switcher'];
  
  /*
  if ($_GET['Type-Switcher'] == 'books') {
    $product->attribute = $_GET['book'];
  }
  if ($_GET['Type-Switcher'] == 'dvds') {
    $product->attribute = $_GET['dvd'];
  }
  if ($_GET['Type-Switcher'] == 'furniture') {
    $dimensions = "{$_GET['height']}x{$_GET['width']}x{$_GET['length']}";
    $product->attribute = $dimensions;
  }

  if ($product->create()) {
    header('Location: /index.php');
  } else {
    header('Location: /add-product.html');
  }
  */
}

