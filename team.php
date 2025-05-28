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
    <?php error_reporting(1); ?>
    <?php session_start(); ?>
    <?php include('header.php'); ?>


    <?php include('navbar.php'); ?>



    <!-- heading section start -->

    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span><a href="team.php">team</a></span></p>
    </section>

    <!-- heading section end -->



    <!-- team section start -->

    <section class="team">
    <?php if ($_SESSION['username'] == "admin") { ?>
        <h1 class="title"> <span>our team</span> <a href="team_add.php">add team member >></a></h1>
    <?php } ?>
        <div class="box-container">
            <?php

            $query = "SELECT * FROM team";
            $rawdata = $connection->query($query);
            while (list($id, $tname, $position, $sarlary, $image) = mysqli_fetch_array($rawdata)) {
                $timage = 'image/team/' . $image;

            
                echo "<div class='box'>";
                echo    "<div class='share'>";
                        echo "<a href='#' class='ri-facebook-fill'></a>";
                        echo "<a href='#' class='ri-twitter-fill'></a>";
                        echo "<a href='#' class='ri-pinterest-fill'></a>";
                        echo "<a href='#' class='ri-instagram-fill'></a>";
                        if ($_SESSION['username'] == "admin") {
                        echo "<a href='team_update.php?id=$id' class='ri-edit-2-fill'></a>";
                        echo "<a href='team_delete.php?id=$id&image=$image' class='ri-delete-bin-2-fill'></a>";
                        }
                    echo "</div>";
                    echo "<div class='image'>";
                        echo "<img src='$timage' alt='$tname'>";
                    echo "</div>";
                    echo "<div class='user'>";
                        echo "<h3>$tname</h3>";
                        echo "<span> $position / $ $sarlary</span>";
                    echo "</div>";
                  echo "</div>";

             }
              ?>
            <!-- team sample -->
            <!-- <div class="box">
                <div class="share">
                    <a href="#" class="ri-facebook-fill"></a>
                    <a href="#" class="ri-twitter-fill"></a>
                    <a href="#" class="ri-pinterest-fill"></a>
                    <a href="#" class="ri-instagram-fill"></a>
                    <a href="#" class="ri-edit-2-fill"></a>
                    <a href="#" class="ri-delete-bin-2-fill"></a>
                </div>
                <div class="image">
                    <img src="image/team-1.jpg" alt="">
                </div>
                <div class="user">
                    <h3>john deo</h3>
                    <span>designer</span>
                </div>
            </div> -->

        </div>
    </section>

    <!-- team section end -->







    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>