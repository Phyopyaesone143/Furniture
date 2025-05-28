<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <?php include('css.php'); ?>

</head>

<body>


    <?php
    // Start the session
    // session_start();

    // // // Check if the user is not logged in (session is not set) အသုံးပြုသူ အကောင့်မရှိရင် ဝင်ကြည့်လို့မရစေရန်သုံး
    // if (!isset($_SESSION['username'])) {
    //     // Redirect to the login page
    //     header('Location: login.php');
    //     exit();
    // }

    // If logged in, show the page content


    ?>

    <?php include('connection.php'); ?>

    <?php include('header.php'); ?>

    <?php include('navbar.php'); ?>



    <!-- heading section start -->

    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span><a href="shop.php">shop</a></span></p>
    </section>

    <!-- heading section end -->


    <!-- category section start -->

    <section class="category">
        <h1 class="title"> <span>our categories</span> <a href="#">view all >></a></h1>

        <div class="box-container">

            <a href="cat_housesofa.php" class="box">
                <img src="image/icon-1.png" alt="">
                <h3>house sofa</h3>
            </a>

            <a href="cat_workingtable.php" class="box">
                <img src="image/icon-2.png" alt="">
                <h3>working table</h3>
            </a>

            <a href="cat_cornertable.php" class="box">
                <img src="image/icon-3.png" alt="">
                <h3>corner table</h3>
            </a>

            <a href="cat_officechair.php" class="box">
                <img src="image/icon-4.png" alt="">
                <h3>office chair</h3>
            </a>

            <a href="cat_newwardrobe.php" class="box">
                <img src="image/icon-5.png" alt="">
                <h3>new wardrobe</h3>
            </a>

        </div>
    </section>

    <!-- category section end -->


    <!-- products section start -->
    <?php session_start(); ?>

    <section class="products">
        <h1 class="title"> <span>our products</span> <a href="#">view all >></a></h1>

        <div class="box-container">

            <!-- added product -->
            <?php
            include('connection.php');
            error_reporting(1);
            $query = "SELECT * FROM product";
            $rawdata = $connection->query($query);
            while (list($id, $name, $price, $star, $image, $category) = mysqli_fetch_array($rawdata)) {

                echo "<div class='box'>";
                echo  "<div class='icons'>";
                if (isset($_SESSION['username'])) {
                    echo "<a href='shopping_cartadd.php?id=$id' class='ri-shopping-cart-line'></a>";
                }
                if ($_SESSION['username'] == "admin") {
                //echo "<a href='#' class='ri-heart-line'></a>";
                echo "<a href='product_update.php?id=$id' class='ri-edit-2-fill'></a>";
                //echo "<a href='#' class='ri-eye-line'></a>";
                echo " <a href='prod_delete.php?id=$id&category=$category&image=$image' class='ri-delete-bin-2-fill'></a>";
                }
                echo "</div>";
                echo "<div class='image'>";

                echo "<img src='image/product/$category/$image' alt='$name'>";

                echo "</div>";
                echo "<div class='content'>";
                echo  "<div class='price'>$ $price.00</div>";
                echo "<h3>$name</h3>";
                echo "<div class='stars'>";
                if ($star > 0 && $star < 6) {
                    for ($a = 1; $a <= $star; $a++) {
                        echo "<i class='fas fa-star'></i>";
                    }
                }
                echo "<span> (50) </span>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
            <!-- Add product_in -->
            <?php if ($_SESSION['username'] == "admin") { ?>
            <div class="box">
                <div class="icons">
                    <a href="product_in.php" class="ri-file-upload-fill"></a>
                </div>
                <div class="image">
                    <img src="image/add more.png" alt="">
                </div>
                <div class="content">

                    <h3>Add more Product</h3>
                    <!-- <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span> (50) </span>
                    </div> -->
                </div>
            </div>
                <?php } ?>
        </div>
    </section>



    <!-- products section end -->

    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>