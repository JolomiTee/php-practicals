<?php 
    include('./config/db_connect.php');
    // write queries
    $sql = 'SELECT title, ingredients, id FROM pizza order by created_at';
    $result = mysqli_query($conn, $sql);

    // fetch resulting rows as ans arrray
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

    // explode(',' , $pizza[0]['ingredients']);

    // print_r($pizzas);

?>
<!DOCTYPE html>
<html lang="en">

    <?php include('./templates/header.php'); ?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container center">

        <?php if (count($pizzas) < 1): ?>
            <p>Pizzas are no pizzas available</p>
        <?php elseif(count($pizzas) == 1): ?>
            <p>There might be pizzas available 📌</p>
        <?php elseif(count($pizzas) > 2): ?>
            <p>There are pizzas available 📌</p>
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="row">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-1">

                    <h1 class="center pizza-img">🍕</h1>

                    <div class="card-content center">
                        <h6>
                            <?php echo htmlspecialchars($pizza['title']); ?>
                        </h6>
                        <ul>
                            <?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                                <li> <?php echo htmlspecialchars($ing); ?></li>
                            <?php endforeach; ?>
                        </ul>
                            
                    </div>

                    <div class="card-action right-align">
                        <a href="./details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
        </div>
    
    </div>

    <?php include('./templates/footer.php'); ?>

</html>