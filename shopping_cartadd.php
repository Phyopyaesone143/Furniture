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
$ctotal = $cprice;

$sqli = "SELECT * FROM shoppingcart";
$rawd = mysqli_query($connection, $sqli);
while (list($id, $name, $quantity, $price, $total) = mysqli_fetch_array($rawd)) {
    if ($name == $cname) {
        $quan = $quantity + $cquantity;
        $sql = "UPDATE shoppingcart SET quantity = '$quan' WHERE name = '$name'";
        $connection->query($sql);
        
        break;
    }
}
if (!$sql) {
$sql2 = "INSERT INTO shoppingcart(name,quantity,price,total) VALUES('$cname','$cquantity','$cprice','$ctotal')";
$connection->query($sql2);
}
header('location:shop.php');
   




?>