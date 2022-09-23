<?php 
    // db connect
    $conn = mysqli_connect('localhost', 'jolomitee', 'icelake1029', "taiwo's pizzeria");

    if(!$conn){
        echo 'connection error'. mysqli_connect_error();
    }
?>