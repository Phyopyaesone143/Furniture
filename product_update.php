<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

    <?php include('css.php'); ?>
</head>

<body>
    <?php include('connection.php'); ?>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>

    <?php
    
    error_reporting(1);
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id=$id";
    $rawdata = $connection->query($query);

    $data = mysqli_fetch_array($rawdata);

    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $star = $_POST['star'];
    $image = $_FILES['image']['name'];
    $category = $_POST['category'];
    // $description = $_POST['description'];
    $click = $_POST['click'];
    $old_image = 'image/'.'product/' . $data['category'] . '/' . $data['image'];
    $old_category = $data['category'];
    $old_img = $data['image'];

    if (isset($click)) {
        if(!empty($image)){
            $query = "UPDATE product SET productname='$productname' , price='$price', category = '$category', image = '$image', star = '$star'  where id='$id'";
            $connection->query($query);
            if (file_exists($old_image)) {
            unlink($old_image);
            }  
            move_uploaded_file($_FILES['image']['tmp_name'], 'image/product/' . $category . '/' . $image);
            header('location:shop.php');
        
        }else{
            if($category != $old_category){
                $query = "UPDATE product SET productname='$productname' , price='$price', category = '$category', image = '$old_img', star = '$star'  where id='$id'";
                $connection->query($query);
                
                move_uploaded_file($_FILES['image']['tmp_name'], 'image/product/' . $category . '/' . $old_img);
                unlink($old_image);
            }else{
                $query = "UPDATE product SET productname='$productname' , price='$price', category = '$category', image = '$old_img', star = '$star'  where id='$id'"; 
                $connection->query($query);
                // move_uploaded_file($_FILES['image']['tmp_name'], 'image/product/' . $old_category . '/' . $old_img);
            }
            header('location:shop.php');
        }
    }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form action="" method="POST" enctype="multipart/form-data">
            <h3>Update Product</h3>

            <!-- Display error message -->
            <?php if (!empty($error_message)) { ?>
                <div class="error-message" style="color: red;">
                    <?php echo $error_message; ?>
                </div>
            <?php } ?>

            <!-- Display success message -->
            <?php if (!empty($success_message)) { ?>
                <div class="success-message" style="color: green;">
                    <?php echo $success_message; ?>
                </div>
            <?php } ?>

            <input type="text" value="<?php echo $data['productname']; ?>" name="productname" class="box" required>
            <input type="number" value="<?php echo $data['price']; ?>" name="price" class="box" required>
            <input type="number" max="5" value="<?php echo $data['star']; ?>" name="star" class="box" required>
            <?php echo "<img src='$old_image' alt='$name' width=80px class='box'>"; ?>
            <input type="file" name="image" class="box">
            
            
            <select name="category" class="box" value="">
                <option><?php echo $data['category']; ?></option>
                <option>House Sofa</option>
                <option>Working Table</option>
                <option>Corner Table</option>
                <option>Office Chair</option>
                <option>New Wardrobe</option>
             </select>

            <input type="submit" value="Upload Product" name="click" class="btn">
            <p>Nothing update? <a href="shop.php">Shop</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>