<?php
    // $spaces = "Dont\nGive\tMe\rThat";
    // echo $spaces;

    // echo "He wrote on the sand, \"return to sender\".";

    // $author = 'Steve Balmer';
    // echo "Developers, Developers, Developers, Developers, Developers, !Developers, !Developers, 3Developers, 
    // - $author.";
    // echo '<br/>';

    // $text = "Measuring programming progress by lines of code is like
    // measuring aircraft building progress by weight,

    // - $author.";

    // echo $text;

    // $out = <<<_END
    // <br/> <br/>
    // Lorem ipsum dolor sit amet consectetur adipisicing elit.
    // Molestiae aliquam, 'possimus corrupti rem',     cum harum aperiam ducimus eveniet enim omnis amet iste magnam est "inventore" nam voluptatem doloremque. 
    
    // dignissimos ipsam?
    // $author
    // _END;

    // echo $out;

    // define('My_DIR', '../images');
   
    // $number = 1234 * 5678;
    // echo $number;
    // echo substr($number, 3, 1);

    // echo 'this is line: '. __LINE__. ' of file: ' . __FILE__  . '<br/>';


    // $b ? print 'True' : print 'False';
    
    // function longDate($timestamp){
    //     $temp = 'Today\'s Date is ';

    //     return $temp . date("l F jS Y", $timestamp);
    // }
    // echo longDate(time()); //- 17 * 24* 60* 60);

    //     function testStatic(){
    //         static $count = 0;
    //         echo '<br/>' . $count;
    //         $count++;
    //     }
    //     testStatic();
    //     testStatic();
    //     testStatic();
    //     testStatic();    

    //     $came_from = htmlentities($_SERVER['REQUEST_URI']);
    //     echo $came_from;

    //     if(9 < 2 and 5  < 7){

    //     }



// 


echo 'a: [' . TRUE . ']<br>';
echo 'b: [' . FALSE . ']<br>';

$myname = "Brian";
$myage = 37;

echo 'a:' . 73 . "<br>";
echo 'b:' . "Hello" . "<br>";
echo 'c:' . false . "<br>";
echo 'd:' . $myage . "<br>";
echo 'e:' . $myname . "<br>";
$day_number = 27;
$days_to_new_year = 366 - $day_number;
if ($days_to_new_year < 30) {
    echo "Not long now till new year";
}
$level = $score = $time = 0;
echo $level;



$a = 1; $b = 0;

// $val = [$a > $b ? "Yes" : "No",
// $a < $b ? "Yes" : "No",
// $a >= $b ? "Yes" : "No",
// $a <= $b ? "Yes" : "No"];
// print_r($val);

echo '<br> 1: '.  ($a and $b) . '<br> 2: '. ($a or $b) .'<br>3: '.  ($a xor $b) .'<br>4: '.  !$a;
$page = 'Home';
    if ($page == "Home") echo "You selected Home";
    elseif ($page == "About") echo "You selected About";
    elseif ($page == "News") echo "You selected News";
    elseif ($page == "Login") echo "You selected Login";
    elseif ($page == "Links") echo "You selected Links";

    
    // can be written as folows
$page = "Home";
    switch ($page){ //:
        case "Home":
            echo "Home Selected";
            break;
        case "About":
            echo "About Selected";
            break;
        case "News":
            echo "News Selected";
            break;
        case "Links":
            echo "Links Selected";
            break;
        default:
            echo "No Selection";
            break;
    } //endswitch;

    
    // whule loops
    $fuel = 10;
    echo $fuel <= 1 ? "fill tank now" : "there is enough fuel";

    while ($fuel != 0) {
        echo "there is $fuel litres of fuel left.. keep driving <br>";
        --$fuel;
    }

    $count = 0;
    while (++$count <= 12){
        echo "12 x $count = " . $count * 12 . "<br>";
    }
    // do while loops
    $count = 1;
    do {
        echo "12 x $count = " . $count * 12 . "<br>";
    } while (++$count <= 10);

    // for loops

    for ($count=1; $count < 12; $count++) { 
        echo "12 x $count = " . $count * 12 . "<br>";
    }

    // for ($i = 1, $j = 1; $i + $j < 10; $i++, $j++) { 
        
    // }

    $j = 10;
    while ($j > -10){
        $j--;
        if ($j == 0) continue;
        echo (10/$j) . "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>