<!-- shopping cart start  -->

<div class="shopping-cart">
    <?php
    error_reporting(1);
    include('connection.php');
    $total = 0;
    $query = "SELECT * FROM shoppingcart";
    $rawdata = $connection->query($query);
    echo "<h4 class ='total'> Shopping Cart </h4>";
    while (list($id, $name, $quantity, $price) = mysqli_fetch_array($rawdata)) {
        $sql = "SELECT * FROM product WHERE productname = '$name'";
        $result = mysqli_query($connection, $sql);
        $data = mysqli_fetch_array($result);
        $pimage = 'image/product/'.$data['category'].'/'.$data['image'];
    ?>
    <div class="box">
       <?php echo "<a href='cancel.php?id=$id'><i class='ri-close-line close-icon'></i></a>"; ?>
        <img src="<?php echo $pimage; ?>" alt="<?php echo $name; ?>">
        <div class="content">
            <h3><?php echo $name; ?></h3>
            <span class="quantity"><?php echo $quantity; ?></span>
            <span class="multiply">x</span>
            <span class="price"><?php echo $price; ?>.00</span>
        </div>
    </div>

    <?php 
    $unit += $quantity;
    $total += $price * $quantity;
    }
    
    ?>
    
    <h2 class="total"> Number of Purcahse : <span><?php echo $unit; ?> pcs </span> </h2>
    <h3 class="total"> total : <span><?php echo $total; ?>.00 </span> </h3>
    <a href="bought.php" class="btn">Purchase all above</a>
    <a href="bought_check.php" class="btn">Clear Shopping Cart</a>

</div>