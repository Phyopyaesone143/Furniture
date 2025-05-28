<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

    if (isset($_POST['click'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        // Check if passwords match
        if ($password !== $password_confirm) {
            $error_message = "Password does not match.";
        } else {
            // Check if email already exists
            $check_email = "SELECT * FROM user WHERE email='$email'";
            $result = $connection->query($check_email);

            if ($result->num_rows > 0) {
                $error_message = "Email already exists. Please try another email.";
            } else {
                // Password Hashing
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                // Insert query
                $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

                // Execute query
                if ($connection->query($query) === TRUE) {
                    $success_message = "User registered successfully!";
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    header('location:index.php'); // Redirect to a welcome page or dashboard
                    exit();
                }
            }
        }
    }
    ?>

    <!-- register form start  -->

    <div class="register-form">
        <form action="register.php" method="post">
            <h3>Register Form</h3>

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

            <input type="text" placeholder="Enter your username" name="username" class="box" required>
            <input type="email" placeholder="Enter your email" name="email" class="box" required>
            <input type="password" placeholder="Enter your password" name="password" class="box" required>
            <input type="password" placeholder="Confirm your password" name="password_confirm" class="box" required>
            <input type="submit" value="Register Now" name="click" class="btn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

    <!-- register form end  -->

    <?php include('footer.php'); ?>
    <?php include('js.php'); ?>

</body>

</html>