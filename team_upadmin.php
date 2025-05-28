<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

    <?php include('css.php'); ?>
</head>

<body>
    <?php include('connection.php');?>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>

    <?php
    
    
    error_reporting(1);
   
    $id = $_GET['id'];
    $que = "SELECT * FROM team WHERE id = '$id'";
    $rawd = $connection->query($que);

    $data = mysqli_fetch_array($rawd);


    
    $oimage = $data['image'];
    $old_image= 'image/team/'.$data['image'];

        $tname = $_POST['tname'];
        $position = $_POST['position'];
        $sarlary = $_POST['sarlary'];
        $image = $_FILES['image']['name'];
        
        $click = $_POST['click'];

        if (isset($click)) {
            
            if(!empty($image)){
                $query = "UPDATE team SET tname = '$tname', position='$position', sarlary='$sarlary', image='$image' WHERE id = '$id'";
                $connection->query($query);
                if (file_exists($old_image)) {
                    unlink($old_image);
                    }
                mkdir("image/team/");
                move_uploaded_file($_FILES['image']['tmp_name'],'image/team/'.$image);
                
            }else{

                $query = "UPDATE team SET tname = '$tname', position='$position', sarlary='$sarlary', image='$oimage' WHERE id = '$id'";
                $connection->query($query);
            }
            header('location:admin/team_admin.php');
        }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form method="POST" action="#" enctype="multipart/form-data">
            <h3>Update Member Data</h3>

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

            <input type="text" value="<?php echo $data['tname']; ?>" name="tname" class="box"required>
            <input type="text" value="<?php echo $data['position']; ?>" name="position" class="box" required>
            <input type="number" value="<?php echo $data['sarlary']; ?>" name="sarlary" class="box"required>
            <?php echo "<img src='$old_image' alt='$tname' width=80px class='box'>"; ?>
            <input type="file" value="Insert image" name="image" class="box">
            <!-- <input type="text" value="category" name='category' class= "box"> -->
             
            <input type="submit" value="Update" name="click" class="btn">
            <p>Nothing uploaded? <a href="admin/team_admin.php">back</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>