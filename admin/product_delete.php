<?php

error_reporting(1);
include('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM product WHERE id = $id";
$smt = $connection->query($sql);
$data = mysqli_fetch_array($smt);   
$old_image= '../image/product/'.$data['category'].'/'.$data['image'];

$query = "DELETE FROM product WHERE id=$id";

$rawd = $connection->query($query);

if (file_exists($old_image)) {
    unlink($old_image);
    }


header('location:product_admin.php');

?>