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

    $tname = $_POST['tname'];
    $position = $_POST['position'];
    $sarlary = $_POST['sarlary'];
    $image = $_FILES['image']['name'];

    $click = $_POST['click'];

    if (isset($click)) {
        $query = "INSERT INTO team (tname,position,sarlary,image) VALUES('$tname','$position','$sarlary','$image')";
        $connection->query($query);
        mkdir("image/team/");
        move_uploaded_file($_FILES['image']['tmp_name'], 'image/team/' . $image);
        header('location:team.php');
    }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form action="team_add.php" method="POST" enctype="multipart/form-data">
            <h3>Add Team Member</h3>

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

            <input type="text" placeholder="Enter your name" name="tname" class="box" required>
            <input type="text" placeholder="Enter your positon" name="position" class="box" required>
            <input type="number" placeholder="Enter your sarlary" name="sarlary" class="box" required>
            <input type="file" placeholder="Insert image" name="image" class="box" required>

            <!-- <input type="date" placeholder="category" name='category' class= "box"> -->

            <input type="submit" value="Add Member" name="click" class="btn">
            <p>Nothing uploaded? <a href="team.php">back</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>