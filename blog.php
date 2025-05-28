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

    <?php include('header.php'); ?>


    <?php include('navbar.php'); ?>

    <!-- heading section start -->

    <section class="heading">
        <h3>our shop</h3>
        <p><a href="index.php">home</a> / <span>blog</span></p>
    </section>

    <!-- heading section end -->



    <!-- blog section start -->

    <section class="blog">
        <h1 class="title"> <span>our blogs</span>
            <?php if (isset($_SESSION['username'])) { ?>
                <a class="btn" style="color:white; margin-left:580px;" href="blog_post.php">Add Post</a>
            <?php } ?>
            <a href="#">view all >></a>
        </h1>

        <div class="box-container">

            <!-- added product -->
            <?php
            $query = "SELECT * FROM blog";
            $rawdata = $connection->query($query);
            while (list($id, $name, $image, $description, $currentdate, $postuser) = mysqli_fetch_array($rawdata)) {

                echo "<div class='box'>";
                echo "<div class='image'>";
                echo "<img src='image/blog/$postuser/$image' alt='$name'>";
                echo "</div>";

                echo "<div class='content'>";
                echo "<h3>$name</h3>";
                echo "<p>";
                echo substr($description, 0, 80);
                echo "...</p>";
                echo "<a href='#' class='btn'>read more</a>";

                echo "<div class='icons'>";
                echo "<p> <i class='fas fa-calendar'></i> $currentdate</p>";
                echo "<a href='team.php'> <i class='fas fa-user'></i> by $postuser</a>";

                if ($_SESSION['username'] == $postuser) {
                    echo "<a href='blog_edit.php?id=$id' class='ri-edit-2-fill' style='color:black;'></a>  ";
                }
                if ($_SESSION['username'] == $postuser || $_SESSION['username'] == 'admin') {
                    echo "<a href='blog_delete.php?id=$id&image=$image&postuser=$postuser' class='ri-delete-bin-2-fill' style='color:black;'></a>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>

          

        </div>
    </section>

    <!-- blog section end -->



    <?php include('footer.php'); ?>

    <?php include('js.php'); ?>

</body>

</html>