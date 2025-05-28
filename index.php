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

    <?php include('connection.php'); ?>

    <?php include('header.php'); ?>

    <?php include('navbar.php'); ?>

    <!-- home section starts  -->
    <?php session_start(); ?>
    <section class="home">
        <div class="slides-container">

            <div class="slide active">
                <div class="content">
                    <span>new arrivals</span>
                    <h3>flexible chair</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet officia tempore accusantium perspiciatis magnam, esse, iure quisquam, harum beatae ab. Velit iure ullam quis rem excepturi quasi reiciendis beatae!</p>
                    <?php if (isset($_SESSION['username'])): ?>
                    <a href="shop.php" class="btn">shop now</a>
                    <?php else: ?>
                    <a href="login.php" class="btn">shop now</a>
                    <?php endif ?>
                </div>
                <div class="image">
                    <img src="image/home-img-1.png" alt="">
                </div>
            </div>

            <div class="slide">
                <div class="content">
                    <span>new arrivals</span>
                    <h3>flexible chair</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia eveniet officia tempore accusantium perspiciatis magnam, esse, iure quisquam, harum beatae ab. Velit iure ullam quis rem excepturi quasi reiciendis beatae!</p>
                    <a href="#" class="btn">shop now</a>
                </div>
                <div class="image">
                    <img src="image/home-img-2.png" alt="">
                </div>
            </div>

        </div>

        <div id="slide-next" onclick="next()" class="ri-arrow-right-line"></div>
        <div id="slide-prev" onclick="prev()" class="ri-arrow-left-line"></div>
    </section>

    <!-- home section ends -->


    <!-- banner section starts  -->

    <section class="banner-container">

        <div class="banner">
            <img src="image/banner-1.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="image/banner-2.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="banner">
            <img src="image/banner-3.jpg" alt="">
            <div class="content">
                <span>limited offer</span>
                <h3>upto 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </section>

    <!-- banner section ends -->

    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>