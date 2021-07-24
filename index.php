<?php
include_once $_SERVER['DOCUMENT_ROOT']. '/config/database.php';
include_once $_SERVER['DOCUMENT_ROOT']. '/objects/product.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/index.css">
  <title>Product List</title>
</head>

<body>
  <main>
    
      <header>
        <h1>Product List</h1>
        <div>
          <a class="button" href="add-product.php">ADD</a>
          <button class="button" value="MASS DELETE" onclick=massDelete()>MASS DELETE</button>
        </div>
      </header>
      <hr>
      <div class="product_container">
      <?php
        $database = new Database();
        $db = $database->getConnection();
          
        $product = new Product($db);
        
        $product->readBooks();
        $product->readDvds();
        $product->readFurniture();
        $product->readSku();
      ?>
      </div>
      
    
      <hr>
  </main>

  <footer>
    <span>Scandiweb Test assignment</span>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./js/massDelete.js"></script>
</body>

</html>

