<?php

    // Basic way of adding an item to a numerically indexed array
    // $paper[] = 'Copier';
    // $paper[] = 'Inkjet';
    // $paper[] = 'Laser';
    // $paper[] = 'Photo';

    // OR

    $paper = array('copier', 'printer','laserjet');
    // FOREACH LOOPING
    $j = 0;
    // using numrric arrays
    foreach ($paper as $item) {
        echo $j.' : ' . $item. '<br/>';
        ++$j;
    }



    // doing it like this too is valid but not very recommended except when specifically inserted
    // $paper[2] = 'Washer';
    // $paper[1] = 'Stapler';
    // $paper[5] = 'MODEM';

    // for ($i=0; $i < 4; $i++) { 
    //     echo "$i: $paper[$i]<br/>";
    // }

    // print_r($paper);

    // ASSOCIATIVE ARRAYS
    // $paper['copier'] = 'Photocopier Machine';
    // $paper['inljet'] = 'Inkjet Printer 2000';
    // $paper['Laser'] = 'Laserjet Printer';
    // echo '<br/>';
    // echo $paper['inljet'];
    // OR
    $p2 = array('copier' => "Copier and Multiuse",
                'laserjet' => "Laserjet printer");

    // echo '<br/>';
    // print_r($p2);
    // echo '<br/>';
    // echo 'p2 element: '. $p2['Laserjet'];

    
    // FOREACH LOOPING
    // using associative arrays
    echo '<br/>';
    foreach ($p2 as $item => $value) {
        echo "$item: $value <br/>";
    }
    echo '<br/>';echo '<br/>';
    // while (list($item, $value) = each($paper))
    //     echo "$item: $value <br/>";

        echo '<br/>';echo '<br/>';
    // MULTIDIMENSIONLA ARRAYS
    $products = array(
        'paper' => array(
            'copier' => "Copier Machine",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laserjet Printer"
        ),
        'pens' => array(
            'ball  ' => "Ball Point",
            'hilite' => "Highlighter",
            'marker' => "Marker"
        ),
        'misc' => array(
            'tape ' => 'Sticky Tape',
            'glue  ' => 'Adhesives',
            'clips ' => "Paperclips"
        )
    );

    echo '<pre>';
        foreach($products as $selection => $items){
            foreach ($items as $key => $value) {
                echo "$selection:\t$key\t($value)<br/>";
            }
        }
    echo '</pre>';

    echo $products['pens']['marker'] . '<br/>';
    
    // PHP ARRAYS
    // is_array
    $fred[] = 'array name taken';
    echo is_array($fred) ? 'its an array' : 'its not an array';
    echo '<br/>';echo '<br/>';

    // count
    echo count($fred);
    echo '<br/>';echo '<br/>';
    echo count($products, 1) * 2;
    echo '<br/>';echo '<br/>';
    // sort
    // sort($products, SORT_STRING);
    echo '<br/>';echo '<br/>';
    // shuffle
    // shuffle($products);
    echo '<br/>';echo '<br/>';
    echo $products['pens']['marker'];
    echo $products['pens']['marker'] . '<br/>';

    // explode
    // explode a string into an array using spaces
    $temp = explode(' ', "My name is Jolomi Taiwo Emmanuel, I am a frontend developer.");
    print_r($temp);

    // extract
    // it is used to refactor the vallues get from a get or post method to be accessible as variables in the code

    extract($_GET, EXTR_PREFIX_ALL, 'fromget');

    // compact
    // it is used to create an array from a group of variables

    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";

    $contact = compact('fname','sname','planet','system','constellation');
    echo '<br/>';echo '<br/>';
    print_r($contact);

    echo '<br/>';echo '<br/>';

    $j = 23;
$temp = "Hello";
$address = "1 Old Street";
$age = 61;
print_r(compact(explode(' ', 'j temp address age')));

    // reset
    



?>