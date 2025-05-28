<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Post</title>

    <?php include('css.php'); ?>
</head>

<body>
    <?php include('connection.php'); ?>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>

    <?php
    error_reporting(1);
    session_start();

    $error_message = '';  // Error message holder
    $success_message = '';  // Success message holder

    $name = $_POST['name'];
    $description = $_POST['description'];
    $postuser = $_SESSION['username'];
    $image = $_FILES['image']['name'];

    $click = $_POST['click'];

    if (isset($click)) {
        if (!empty($postuser)) {
            $currentdate = date("Y/m/d");

            $query = "INSERT INTO blog (name,image,description,currentdate,postuser) VALUES('$name','$image','$description','$currentdate','$postuser')";
            mysqli_query($connection, $query);
            mkdir("image/blog/$postuser");
            move_uploaded_file($_FILES['image']['tmp_name'], 'image/blog/'.$postuser.'/'.$image);
            header('location:blog.php');
        } else {
            header('location:login.php');
        }
    }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form action="blog_post.php" method="POST" enctype="multipart/form-data">
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

            <input type="text" placeholder="Add title" name="name" class="box" required>
            <input type="file" name="image" class="box" required>
            <textarea type="text" name="description" placeholder="Enter description" class="box" required></textarea>

            <input type="submit" value="Upload Post" name="click" class="btn">
            <p>Nothing uploaded? <a href="blog.php">Shop</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>