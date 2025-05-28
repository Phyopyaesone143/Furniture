<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Post</title>

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
    $id = $_GET['id'];

    $sql ="SELECT * FROM blog WHERE id = '$id'";
    $rawdat = $connection->query($sql);

    $data = mysqli_fetch_array($rawdat);

    $o_image = $data['image'];
    $o_user = $data['postuser'];
    $old_image = 'image/' . 'blog/' . $o_user . '/' . $o_image;
    $o_description = $data['description'];

    $name = $_POST['name'];
    $description = $_POST['description'];
    $postuser = $_SESSION['username'];
    $image = $_FILES['image']['name'];
    $currentdate = date("Y/m/d");

    $click = $_POST['click'];

    if (isset($click)) {
        if (!empty($image)) {
            

            $query = "UPDATE blog SET name='$name', image='$image', description='$description', currentdate='$currentdate', postuser='$postuser'  WHERE id='$id'";
            $connection->query($query);
            if (file_exists($old_image)) {
                unlink($old_image);
            }
            mkdir("image/blog/$postuser/");
            move_uploaded_file($_FILES['image']['tmp_name'], 'image/blog/' . $postuser . '/' . $image);
            header('location:blog.php');
        } else {
            

            $query = "UPDATE blog SET name='$name',image='$o_image',description='$description',currentdate='$currentdate',postuser='$postuser'  WHERE id='$id'";
            mysqli_query($connection, $query);
            // echo $name.$image.$description.$currentdate.$postuser;
            header('location:blog.php');
        }
    }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form  method="POST" enctype="multipart/form-data">
            <h3>Edit_Post</h3>

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

            <input type="text" value="<?php echo $data['name']; ?>" name="name" class="box" required>
            <?php echo "<img src='$old_image' alt='$name' width=80px class='box'>"; ?>
            <input type="file" name="image" class="box">
            <textarea type="text" name="description" class="box" required><?php echo $o_description; ?></textarea>

            <input type="submit" value="Edit Post" name="click" class="btn">
            <p>Nothing edit? <a href="blog.php">Blog</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>