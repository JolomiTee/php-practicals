<?php
    // echo 'Hello Taiwo🙋‍♂️';
    // define('NAME', 'Jolomi Taiwo');
    
    // $son = 'Taiwo Jolomi';
    // $daug = 'Shade Jolomi';

    // $age = 20;
    // echo strtolower($daug);
    // echo str_replace('o', 'u', $daug);
    // $pi = 3.125;
    // echo $age ** $pi;
    // php follows Bracket Increment Division Multiplication Addition Subtraction
    // echo floor($pi);
    // echo pi();
    // INDEXED ARRAYS
    // $peopleOne = ['Me', 'You', 'Them', 'Us'];
    // echo $peopleOne[2];
    

    // $peopleTwo = array('Those', 'These', 'We');
    // echo $peopleTwo[2];
    // $peopleTwo[2] = 'Our';

    // $peopleTwo[] = 'Selves';
    // array_push($peopleTwo, 'We are!!');
    // print_r($peopleTwo);
    // echo count($peopleOne);

    // $peoplethree = array_merge($peopleOne, $peopleTwo);
    // print_r($peoplethree);

    // $blogs = [
    //     ['Language'=>'HTML', 'Framework'=>'Emmet Abbreviation', 'Editor'=>'SublimeText'],
    //     ['Language'=>'CSS', 'Framework'=>'Bootstrap and Tailwind', 'Editor'=>'VS Code'],
    //     ['Language'=>'Javascript', 'Framework'=>'React, Angular and Vue', 'Editor'=>'Vim']
    // ];


    // for ($i=0; $i < count($blogs); $i++) { 
    //     echo $blogs[2]['Framework'].'<br/>';
    // };

    // foreach ($blogs as $blog) {
    //     echo 'The '. $blog['Language'] . ' language has a framwork called ' . $blog['Framework'] . ' and uses the ' . $blog['Editor'] . ' editor' . '<br />';
    // };

    // $i = 0;
    // while ($i < count($blogs)) {
    //     echo $blogs[$i]['Language'] . '<br/>';
    //     $i++;
    // };

    // print_r($blogs);
    // print_r($blogs[1]);
    // echo $blogs[1]['Editor'];
    // echo count($blogs);
    // $blogs[] = ['Language'=>'Python', 'Framework'=>'Flask', 'Editor'=>'Pycharm'];

    // $popped = array_pop($blogs);
    // print_r($popped);
    
    // print_r($blogs);

    // echo 'taiwo' < 'Taiwo';
    // echo 'taiwo' === 'Taiwo';

    // CONDITIONAL STATEMENTS
    // $price = 20;
    // if ($price < 10) {
    //     echo 'Condition is met';
    // } elseif ($price < 30) {
    //     echo 'elif condition met';
    // } else {
    //     echo 'Condition not met';
    // }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'Biscuit', 'price' => 40],
        ['name' => 'Coke', 'price' => 25],
        ['name' => 'Bag of Rice', 'price' => 100],
        ['name' => 'Beans', 'price' => 75],
        ['name' => 'Milk', 'price' => 30]
    ];
    // print_r($products);
    // foreach ($products as $product) {
    //     if ($product['price'] > 30 && $product['price'] < 180) {
    //         echo $product['name'] . '<br/>';
    //     }
    // }

    // foreach ($products as $product) {
    //     if ($product['price'] > 10 || $product['price'] < 18) {
    //         echo $product['name'] . '<br/>';
    //     }
    // }

    // break / continue
    // foreach ($products as $product) {
        
    //     if ($product['name'] === 'Beans') {
    //         break;
    //     }

    //     if($product['price'] > 55){
    //         continue;
    //     }

    //     echo $product['name'] . '<br />';
    // }

    // FUNCTION
    function sayHello($name){
        echo 'Hello ' . $name . '<br />';
    }
    sayHello('Jolomi');  

    function formatProduct($product){
        // echo "{$product['name']} costs $ {$product['price']} <br />>";
        return "{$product['name']} costs $ {$product['price']} <br />";
    }

    $formatted = formatProduct(['name'=> 'shiny star', 'price'=> 20]);

    echo $formatted;

    include('include.php');
    require('include.php');
    echo 'end of include';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP</title>
    <!-- <style>
        table{
            border: 1px solid black;
        }
        tr, th, td{
            border: 1px solid black;
            padding: 10px;
        }
    </style> -->
</head>
<body>



    <!-- <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if($product['price'] > 55){ ?>
                    <li>
                        <?php echo $product['name']; ?>
                    </li>
                <?php } ?>
            <?php }?>
        </ul>
    </div> -->

    <!-- <h1></h1>
    <h1><?php echo $son . $daug; ?></h1>
    <h1><?php echo 'My name is '.$son. '. I am '.$age. ', my sister is '.$daug; ?></h1>
    <p>
        <?php echo "My name is $son"; ?>
    </p>
    <p>
        <?php echo "i am learning \"php\" $son[0]"; ?>
    </p> -->

    <!-- <h1>Programming Languages</h1>
    <ul>
        <?php foreach ($blogs as $blog){ ?>
        <li>
            <h3><?php echo $blog['Language']; ?></h3>
            <p><?php echo $blog['Framework']; ?></p>
            <p><?php echo $blog['Editor']; ?></p>
        </li>
        <?php } ?>
    </ul> -->

    <!-- <table>
        <tr>
            <th>Language</th>
            <th>Framework</th>
            <th>Editor</th>
        </tr>
        <?php foreach ($blogs as $blog){ ?>
            <tr>
                <td><?php echo $blog['Language']; ?></td>
                <td><?php echo $blog['Framework']; ?></td>
                <td><?php echo $blog['Editor']; ?></td>
            </tr>

        <?php } ?>
    </table> -->

    <?php include 'content.php'; ?>

    
</body>
</html>