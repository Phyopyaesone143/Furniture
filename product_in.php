<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addproduct</title>

    <?php include('css.php'); ?>
</head>

<body>
    <?php include('connection.php'); ?>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>

    <?php
    error_reporting(1);
    

    $error_message = '';  // Error message holder
    $success_message = '';  // Success message holder

        $productname = $_POST['productname'];
        $price = $_POST['price'];
        $star = $_POST['star'];
        $image = $_FILES['image']['name'];
        $category = $_POST['category'];
        $click = $_POST['click'];

        if (isset($click)) {
            if (empty($category)){
                $error_message = "Please select a category.";
                // header('location:product_in.php');
            }else{
            $query = "INSERT INTO product(productname,price,star,image,category) VALUES('$productname','$price','$star','$image', '$category')";
            $connection->query($query);
            mkdir("image/product/$category");
             move_uploaded_file($_FILES['image']['tmp_name'],'image/product/'.$category.'/'.$image);
            header('location:shop.php');
            }
        }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form action="product_in.php" method="POST" enctype="multipart/form-data">
            <h3>Add Product</h3>

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

            <input type="text" placeholder="Enter your Product name" name="productname" class="box" required>
            <input type="number" placeholder="Enter price" name="price" class="box" required>
            <input type="number" max="5" placeholder="Enter your star" name="star" class="box" required>
            <input type="file" placeholder="Insert image" name="image" class="box" required>
            <!-- <input type="text" placeholder="category" name='category' class= "box"> -->
             <select name="category" class="box">
                <option value="" >Choose category</option>
                <option>House Sofa</option>
                <option>Working Table</option>
                <option>Corner Table</option>
                <option>Office Chair</option>
                <option>New Wardrobe</option>
             </select>
            <input type="submit" value="Upload Product" name="click" class="btn">
            <p>Nothing uploaded? <a href="shop.php">Shop</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>