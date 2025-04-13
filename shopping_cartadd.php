<!-- shopping cart -->

<?php
// Get the cart items
include('connection.php');
error_reporting(1);
$id = $_GET['id'];
echo $id;
$query = "SELECT * FROM product WHERE id = '$id'";
$rawdata = mysqli_query($connection, $query);
$data = mysqli_fetch_array($rawdata);
$cname = $data['productname'];
$cprice = $data['price'];
$cquantity = 1;
$sql = "INSERT INTO shoppingcart(name,quantity,price) VALUES('$cname','$cquantity','$cprice')";
$connection->query($sql);

header('location:shop.php');
?>