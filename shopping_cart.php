<!-- shopping cart start  -->
<?php
 include('connection.php');
 error_reporting(1);
        $click = $_POST['click'];
        $nid=$_POST['id'];
        if (isset($click)) {
            
            $newname = $_POST['name'];
            $newquantity = $_POST['quantity'];
            $newprice = $_POST['price'];
            $newtotal = $newquantity*$newprice;

            

            $sqlnew = "UPDATE shoppingcart SET name='$newname' , quantity='$newquantity', price='$newprice', total='$newtotal' WHERE id='$nid'";
            $rawdata = mysqli_query($connection, $sqlnew);
            header('location:shop.php');
        }
        ?>

<div class="shopping-cart">
    <?php
   
   
    $balance = 0;
    $unit=0;
    $query = "SELECT * FROM shoppingcart";
    $rawdata = $connection->query($query);
    echo "<h4 class ='total'> Shopping Cart </h4>";
    while (list($id, $name, $quantity, $price,$total) = mysqli_fetch_array($rawdata)) {
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
            <!-- edit quantity -->
            <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" value="<?php echo $name; ?>" style="display:none;">
            <input type="number" min='0' name="quantity" class="quantity" value="<?php echo $quantity; ?>" style="width:60px;">
            <input type="number" name="price" value="<?php echo $price; ?>" style="display:none;">  
            <input type="number" name="id" value="<?php echo $id; ?>" style="display:none;">
            <button type='submit' name="click" style="font-size:25px;font-weight:900;color: #845f51;">+</button>
             
            </form>
            
        
        <!-- end edit -->
            <span class="multiply">x</span>
            <span class="price"><?php echo $price; ?>.00 = <?php echo $total; ?>.00</span>
            
           
           
        </div>
    </div>

    <?php 
    $unit += $quantity;
    $balance += $total;
    }
    
    ?>
    
    <h2 class="total"> Number of Purcahse : <span><?php echo $unit; ?> pcs </span> </h2>
    <h3 class="total"> total : <span><?php echo $balance; ?>.00 </span> </h3>
    <a href="bought.php" class="btn">Purchase all above</a>
    <a href="bought_check.php" class="btn">Clear Shopping Cart</a>

</div>
