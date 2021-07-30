<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/styles/product.css" />
    <title>Add Product</title>
  </head>
  <!--SELECT sku FROM `dvds` UNION SELECT sku FROM `books` UNION SELECT sku from `furniture`-->
  <body>
    <main>
      <form
        id="product_form"
        action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="post"
      >
        <header>
          <h1>Add Product</h1>
          <div>
            <button type="submit" class="button">Save</button>
            <a href="index.php" class="button">Cancel</a>
          </div>
        </header>
        <hr />
        <div class="form-container">
          <div class="form-control">
            <label for="sku">SKU</label>
            <input name="sku" id="sku" type="text"  required/>
            <label for="name">Name</label>
            <input name="name" id="name" type="text"  required/>
            <label for="price">Price ($)</label>
            <input name="price" id="price" type="text"  required/>
            <label for="Type-Switcher">Type Switcher</label>
            <select name="Type-Switcher" id="productType">
              <option id="Book" value="book">Book</option>
              <option id="DVD" value="dvd">DVD</option>
              <option id="Furniture" value="furniture">Furniture</option>
            </select>
            <div id="type" class="type">
            </div>
          </div>
        </div>
      </form>
      <?php 
      
      include_once $_SERVER['DOCUMENT_ROOT']. '/config/database.php';
      include_once $_SERVER['DOCUMENT_ROOT']. '/objects/product.php';
      
      $database = new Database();
      $db = $database->getConnection();
      
      $product = new Product($db);

      $skuValues = $product->getSku();

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $url .= "&attribute={$_POST['height']}x{$_POST['width']}x{$_POST['length']}";
        echo $url;
        $errors = [];

        $url = "/php/new_product.php?sku={$_POST['sku']}&name={$_POST['name']}&price={$_POST['price']}&Type-Switcher={$_POST['Type-Switcher']}";

        if (preg_match("/^[A-Za-z0-9]/",$_POST['sku'])) {
          /*
          foreach($skuValues as $skuValues){
            if($_POST['sku'] == $skuValues){
              echo "the sku must be unique<br>";
              
              array_push($errors, $_POST['sku']);
            }
            
          }
          */
        }else {
          echo "the sku must contain only letters and numbers<br>";
        }
        
        if (!preg_match("/^[a-zA-Z_ ]*$/",$_POST['name'])) {
          echo "Only letters and white space allowed in name<br>";
          array_push($errors, $_POST['name']);
        }

        if(!is_numeric($_POST['price'])){
          echo "Price not a number<br>";
          array_push($errors,$_POST['price']);
        }
        
        if ($_POST['Type-Switcher'] == 'book') {
          if(!is_numeric($_POST['book'])){
            echo "Weight not a number<br>";
            array_push($errors, $_POST['book']);
          }else {
            $url .= "&attribute={$_POST['book']}";
          }  
        }
        
        if ($_POST['Type-Switcher'] == 'dvd') {
          if(!is_numeric($_POST['dvd'])){
            echo "Size not a number<br>";
            array_push($errors, $_POST['dvd']);
          }else {
            $url .= "&attribute={$_POST['dvd']}";
          }
        }

        if ($_POST['Type-Switcher'] == 'furniture') {
            if(!is_numeric($_POST['height']) && !is_numeric($_POST['width']) && !is_numeric($_POST['length'])){
              echo "Dimension not a number<br>";
              array_push($errors, $_POST['height']);
            }else {
              $url .= "&attribute={$_POST['height']}x{$_POST['width']}x{$_POST['length']}";
            }
        }

        if(count($errors) == 0){
         header("Location: {$url}");
        }
      }

    ?>
      <hr />
    </main>
    <footer>
      <span>Scandiweb Test assignment</span>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/type.js"></script>
    
  </body>
</html>
