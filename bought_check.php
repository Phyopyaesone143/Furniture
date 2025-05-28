<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>

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

    

    

    <!-- heading section start -->

    <section class="heading">
        <h3>Dear Customer, do you clear all the stocks in your cart?</h3>
        <p style="font-weight: bold;"><a href="bought_cancel.php">Yes</a> / <span><a href="shopping_cart.php" id="cart_btn">No</a></span></p>
    </section>

    <!-- heading section end -->

    

    

    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>