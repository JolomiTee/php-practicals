<?php 
    include('config.php');
    session_start();

    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = md5($_POST['password']);

        $sql = "select * from user_form where email = '$email' && password = '$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if ($row['user_type'] == 'admin'){
                $_SESSION['admin_name'] = $row['name'];
                header('Location: admin_page.php');

            } elseif ($row['user_type'] == 'user'){
                $_SESSION['user_name'] = $row['name'];
                header('Location: user_page.php');

            }
        } else {
            $error[] = 'incorrect email or password';
        }
    };
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="POST">
            <h3>Log In</h3>
            <?php 
                if(isset($error)){
                    foreach ($error as $error) {
                        echo '<span class="error-msg">'. $error . '</span>';
                    }
                }
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Are you a new user? <a href="register_form.php">Register here</a></p>
        </form>
    </div>
</body>
</html>