<?php 
    include('./config/db_connect.php');
    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql = "delete from pizza where id = $id_to_delete";

        if (mysqli_query($conn, $sql)){
            // success
            header(('Location: index.php'));
        } else {
            echo 'query error'. mysqli_error($conn);
        }
    }




    // check get request id parameter
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "select * from pizza where id = $id";
        // get query result
        $result = mysqli_query($conn, $sql);

        // fetch result in assoc array
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
        // print_r($pizza);

    }

?>


<!DOCTYPE html>
<html lang="en">
<?php include('./templates/header.php'); ?>
    <div class="container center">
        <?php if($pizza): ?>
            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo htmlspecialchars($pizza['created_at']); ?></p>
            <h5>Ingredients</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

            <!-- delete form -->
            <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $pizza['id'] ?>">
                <input type="submit" class="btn brand z-depth-0" name="delete" value="Delete">
            </form>
        <?php else: ?>
            <h5>Already Sold for some Cool 💰</h5>
        <?php endif?>
    </div>
    <!-- <h2>Details</h2> -->




<?php include('./templates/footer.php'); ?>

</html>