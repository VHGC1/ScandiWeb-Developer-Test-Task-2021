<?php 
class Validation extends Product {
  function getSku()
  {
    $skus = [];

    $query = "SELECT sku FROM `products`";

    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      array_push($skus, $sku);
    }
    return $skus;
  }
}
?>