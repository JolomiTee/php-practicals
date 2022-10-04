<?php
    // require_once './index3.php';
    // include_once './index3.php';

    // $names = fix_names('WilliaM', 'HENry', 'gaTES');
    // echo $names[2] . ' ' . $names[0] . ' ' . $names[1]; 

    // function fix_names($n1, $n2,$n3){
        
    //     $n1 = ucfirst(strtolower($n1));
    //     $n2 = ucfirst(strtolower($n2));
    //     $n3 = ucfirst(strtolower($n3));
    //     // return $n1 . " " . $n2 . " " . $n3;
    //     return array($n1, $n2, $n3);
    // }

    $a1 = 'WILLIam';
    $a2 = 'Henry';
    $a3 = 'GATes';

    echo $a1 . ' ' . $a2 . ' ' . $a3 . '<br/>';
    
    fix_names($a1, $a2, $a3);
    echo $a1 . ' ' . $a2 . ' ' . $a3 . '<br/>';
    
    function fix_names(&$n1, &$n2, &$n3){
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
    }

    if(function_exists('array_combine')){
        echo "Function Exists";
    } else{
        echo "Non existent, write yourse bruv";
    }





?>