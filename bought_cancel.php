<?php

error_reporting(1);
include('connection.php');

    $query = "SELECT * FROM shoppingcart";
    $rawdata = $connection->query($query);
    
    while (list($id, $name, $quantity, $price,$total) = mysqli_fetch_array($rawdata)) {
    $sql = "DELETE FROM shoppingcart WHERE id=$id ";
    $connection->query($sql);
    }

  header('location:shop.php')

?>