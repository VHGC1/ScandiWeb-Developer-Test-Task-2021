<?php
class Product{
  private $conn;
  
  public $table_name;

  public $sku;
  public $name;
  public $price;
  public $attribute;

  public function __construct($db){
    $this->conn = $db;
  }

  function create(){
    
    $query = "INSERT INTO
      " . $this->table_name . "
      SET
        sku=:sku, name=:name, price=:price, attribute=:attribute";

    $stmt = $this->conn->prepare($query);

    $this->sku = htmlspecialchars(strip_tags($this->sku));
    $this->name = htmlspecialchars(strip_tags($this->name));
    $this->price = htmlspecialchars(strip_tags($this->price));
    $this->attribute = htmlspecialchars(strip_tags($this->attribute));
    
    $stmt->bindParam(":sku", $this->sku);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->price);
    $stmt->bindParam(":attribute", $this->attribute);

    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }

  function delete($table_name, $sku){
    
    $query = "DELETE FROM ".$table_name." WHERE sku='{$sku}'";
    
    $stmt = $this->conn->prepare($query);
   
    $stmt->execute();
  }

  function readBooks(){
    
    $query = "SELECT * FROM books";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      
      echo "
        <div class='product_card' id=\"books_".$sku."\">
          <div class='checkbox_delete'>
            <input class='delete-checkbox' type='checkbox' name='' id=''>
          </div>
        <div class='product_info'>
          <p>{$sku}</p>
          <p>{$name}</p>
          <p>{$price} $</p>
          <p>Weight: {$attribute}</p>
        </div>
      </div>";
    }
  }

  function readDvds(){
    $query = "SELECT * FROM dvds";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      
      echo "
        <div class='product_card' id=\"dvds_".$sku."\">
          <div class='checkbox_delete'>
            <input class='delete-checkbox' type='checkbox' name='' id=''>
          </div>
        <div class='product_info'>
          <p>{$sku}</p>
          <p>{$name}</p>
          <p>{$price} $</p>
          <p>Size: {$attribute}</p>
        </div>
      </div>";
    }
  }

  function readFurniture(){
    $query = "SELECT * FROM furniture";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      
      echo "
        <div class='product_card' id=\"furniture_".$sku."\">
          <div class='checkbox_delete'>
            <input class='delete-checkbox' type='checkbox' name='' id=''>
          </div>
        <div class='product_info'>
          <p>{$sku}</p>
          <p>{$name}</p>
          <p>{$price} $</p>
          <p>Dimensions: {$attribute}</p>
        </div>
      </div>";
    }
  }

  function readSku(){
    $skus = [];

    $query = "SELECT sku FROM `dvds` UNION 
              SELECT sku FROM `books` UNION 
              SELECT sku from `furniture`";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      array_push($skus, $sku);
    }
    return $skus;
  }
}

 
