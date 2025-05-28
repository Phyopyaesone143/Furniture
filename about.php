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

// // Check if the user is not logged in (session is not set)
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
        <p><a href="index.php">home</a> / <span>about</span></p>
    </section>

    <!-- heading section end -->



    <!-- about section start -->

    <section class="about">

        <div class="image">
            <img src="image/about-img.jpg" alt="">
        </div>

        <div class="content">
            <span>welcome to our shop</span>
            <h3>we make your home more astonishing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid fugit labore facere non autem soluta tempora natus, sequi obcaecati esse officia aspernatur impedit dignissimos ut porro praesentium similique numquam magnam.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam sequi illo cum expedita, eius laboriosam? Blanditiis quisquam, iure nisi, ex amet odit obcaecati eaque voluptatibus porro repudiandae sit libero debitis!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </section>

    <!-- about section end -->


    <!-- services section start -->

    <section class="services">

        <h1 class="title"> <span>our services</span> <a href="#">view all >></a></h1>

        <div class="box-container">

            <div class="box">
                <img src="image/serv-1.png" alt="">
                <h3>product selling</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/serv-2.png" alt="">
                <h3>product designing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="image/serv-3.png" alt="">
                <h3>24 / 7 support</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id necessitatibus atque quod dicta. Esse perferendis sit vel quam deleniti voluptate. Provident molestias quibusdam recusandae quas illum ratione natus hic.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- services section end -->






    <?php include('footer.php'); ?>
    <?php include('js.php');?>

</body>

</html>