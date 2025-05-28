<?php
include('connection.php');
session_start();

session_destroy();  // Destroy session

$query = "SELECT * FROM shoppingcart";
    $rawdata = $connection->query($query);
    
    while (list($id, $name, $quantity, $price) = mysqli_fetch_array($rawdata)) {
    $sql = "DELETE FROM shoppingcart WHERE id=$id ";
    $connection->query($sql);
    }

header('location: login.php');  // Redirect to login page
exit();
?>