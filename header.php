<?php
include('connection.php');
error_reporting(1);
session_start(); // Start session to check if user is logged in
?>

<!-- header section starts  -->
<style>
    .cartnum {
        border: 4px solid red;
        border-radius: 80px;
        background-color: red;

    }
</style>
<header class="header">

    <?php if (!isset($_SESSION['username'])) {
        $query = "SELECT * FROM shoppingcart";
        $rawdata = $connection->query($query);

        while (list($id, $name, $quantity, $price, $total) = mysqli_fetch_array($rawdata)) {
            $sql = "DELETE FROM shoppingcart WHERE id=$id ";
            $connection->query($sql);
        }
    } ?>


    <a href="index.php" class="logo"> <i class="ri-menu-line"></i> FurnishMe </a>

    <!-- <form action="#" class="search-form">
        <input type="search" placeholder="search here..." id="search-box">
        <label for="search-box" class="ri-search-line"></label>
    </form> -->

    <div class="icons">
        <div id="search-btn" class="ri-search-line"></div>
        <?php if ($_SESSION['username'] == "admin"): ?>
            <a href="admin/index.php" class="btn" style="height:50%!important; white-space: nowrap; background-color:#5e473e; color:aliceblue; font-size: 1.5rem; text-align:center; border-radius:2rem;"><i>admin page</i></a>
        <?php endif; ?>

        <!-- cart -->
        <div style="position: relative;">
            <div id="cart-btn" class="ri-shopping-cart-line"></div>
            <?php
            $query = "SELECT * FROM shoppingcart";
            $rawdata = mysqli_query($connection, $query);
            $count = 0;
            while (list($id, $name, $quantity, $price, $total) = mysqli_fetch_array($rawdata)) {
                $itotal += $quantity;
            } ?>
            <?php if ($itotal > 0) { ?>
                <div id="cart-btn" class="cartnum" style="color:white; font-size:12px; position:absolute;right:-7px;top:-12px;border-radius:50%;"><?php echo $itotal; ?></div>
            <?php } ?>
        </div>

        <!-- cart end -->

        <?php if (isset($_SESSION['username'])): ?>
            <!-- <a href="logout.php" id="logout-btn" class="ri-logout-box-line" style="color:black; font-size:30px;"></a> -->
            <a href="logout.php" id="logout-btn" class="ri-logout-box-line" style="color:black; font-size:30px;"><?php echo $_SESSION['usrname']; ?></a>
        <?php else: ?>
            <a href="login.php" id="login-btn" class="ri-user-line"></a>
        <?php endif; ?>

        <div id="menu-btn" class="ri-menu-line"></div>
    </div>
</header>

<!-- header section ends  -->
<div id="shoppingcart">
    <?php include 'shopping_cart.php'; ?>
</div>