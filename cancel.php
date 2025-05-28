<?php

error_reporting(1);
include('connection.php');
    $id = $_GET['id'];
    
    $sql = "DELETE FROM shoppingcart WHERE id=$id";
    $connection->query($sql);
    

    header('location:shop.php');

?>