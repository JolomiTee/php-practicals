<?php 
    include('./config/db_connect.php');
    // if (isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
        
    // }
    $title = $email = $ingredient = '';
    $errors = array('email'=>'', 'title'=>'', 'ingredients'=>'');
    if (isset($_POST['submit'])){
        // echo htmlspecialchars( $_POST['email']);
        // echo htmlspecialchars( $_POST['title']);
        // echo htmlspecialchars( $_POST['ingredients']);

        // email check
        if (empty($_POST['email'])){
            $errors['email'] =  'enter your email please <br/>';
        } else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address';
            }
            // echo htmlspecialchars( $_POST['email']);
        }
        // title check
        if (empty($_POST['title'])){
            $errors['title'] = 'enter pizza title please <br/>';
        } else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                $errors['title'] = 'title must be letters and spaces only';
            }
            // echo htmlspecialchars( $_POST['title']);
        }
        
        if (empty($_POST['ingredients'])){
            $errors['ingredients'] = 'at least one ingredient required <br/>';
        } else{
            $ingredient = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredient)){
                $errors['ingredients'] = 'ingredients must be words and comma separated list';
            }
            // echo htmlspecialchars( $_POST['ingredients']);
        }

        if (array_filter($errors)){
            // echo ' There are errors in the form';
        } else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

            // create sql
            $sql = "insert into pizza(title, email, ingredients) values('$title', '$email', '$ingredient')"; 

            // ave to db
            if(mysqli_query($conn, $sql)){
                // success
                header('Location: index.php');
            } else {
                echo 'query error'. mysqli_error($conn);
            }
            // echo 'Form Submitted';
        }
        
    } //end of post check

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('./templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="white">
            <label>Your Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>" >
            <div class="red-text"><?php echo $errors['email'] ?></div>

            <label>Pizza Title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title)?>" >
            <div class="red-text"><?php echo $errors['title'] ?></div>

            <label>Ingredients (comma separated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredient)?>">
            <div class="red-text"><?php echo $errors['ingredients'] ?></div>

            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>

        </form>
    </section>

    <?php include('./templates/footer.php'); ?>
    
</html>