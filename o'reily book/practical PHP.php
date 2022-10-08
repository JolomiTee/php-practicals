<?php
//     printf("There are %X items in your basket", 3);
//     $c = 123.42 / 12;
//     PRECISION SETTING
// echo '<pre>';

//         printf("..$%15f\n", $c);
        
//         echo '<br/>';echo '<br/>';
        
//         printf("..$%015f\n", $c);

//         echo '<br/>';echo '<br/>';

//         printf("...$%015.2f\n", $c);

//         echo '<br/>';echo '<br/>';

//         printf("...$%15.2f\n", $c);

//         echo '<br/>';echo '<br/>';

//         printf("...$%'#15.2f\n", $c);
//         echo '<br/>';echo '<br/>';

//         printf("...$%'#15.4f\n", $c);

       


//     echo '</pre>';

//     STRING PADDING


//     echo '<pre>';

//         $h = 'Jolomi';
//         $d = 'Jolomi Taiwo';

//         printf("[%s]\n", $h);
//         echo '<br/>';echo '<br/>';

       
//         printf("[%15s]\n", $h);
//         echo '<br/>';echo '<br/>';

       
//         printf("[%-015s]\n", $h);
//         echo '<br/>';echo '<br/>';
//         printf("[%-15s]\n", $h);
//         echo '<br/>';echo '<br/>';

       
//         printf("[%015s]\n", $h);
//         echo '<br/>';echo '<br/>';

       
//         printf("[%'#12s]\n", $h);
//         echo '<br/>';echo '<br/>';
        
//         printf("[%-'#12s]\n", $h);
//         echo '<br/>';echo '<br/>';

//         ###################################################


//         printf("[%12.8s]\n", $d);
//         echo '<br/>';echo '<br/>';

//         printf("[%-12.10s]\n", $d);
//         echo '<br/>';echo '<br/>';

//         printf("[%-'@12.8s]\n", $d);
//         echo '<br/>';echo '<br/>';


//         USING SPRINTF

//         $hexadecimal = sprintf("%X%X%X", 65, 127, 245);

//         echo $hexadecimal;




        // USING DATE AND TIME





        

       


// echo '</pre>';   DATE AND TIME HANDLING




// echo '<pre>';
//     $day = 'l';
//     $month = 'F';
//     $date = 'jS';
//     $year = 'Y';
//     $hour = 'g';
//     $minute = 'i';
//     $seconds = 's';
//     $meridian = 'a';
//     $time = time();


//     echo time(); //number of seconds since jan 1 1970
//     echo '<br/>';echo '<br/>';

//     echo date("$day $month $date, $year - $hour:$minute:$seconds $meridian", $time);
//     echo '<br/>';echo '<br/>';
//     echo date("D M jS, y - g:i:sa", time());


//     echo checkdate(3,6,2002) ? 'date is valid' : 'invalid date';

// echo '</pre>';

echo '<pre>';

    if (file_exists('./index.php')) {
        echo 'File exists';
    } else {
        $fh = fopen("index.php", 'w') or die('Failed to create file');
        $text = <<<_END
        Line 1
        line 2
        line 3
        _END;

        fwrite($fh, $text) ? 'File Created' : 'File not created';
        fclose($fh);
        echo "File 'index.php' written successfully";
    }



    
    echo '<br/>';echo '<br/>';

    $fh = fopen('index.php', 'r') or die('File doesnt exist or you lack permission to open it');

    $line = fread($fh, 100);
    // $line = fgets($fh, 100);
    fclose($fh);
    echo $line;

    echo '<br/>';echo '<br/>';



    // COPY ANOTHER FILE

    if (copy('index.php', 'index2.php')) {
        echo 'File copied successfully';
    } else {
        'file not copied';
    }



    // MOVING A FILE
    // if (!rename('index22.php', './func/index22.php')) {
    //     //what i did here was to spec a directory i wanted the file to be in from its original location
    //     echo 'Couldnt rename file';
    // } else{
    //     echo 'file renamed successfully';
    // }

    // // DELETING A FILE
    // unlink('./func/index22.php') ? 'file deleted successfully' :  'file couldnt be deleted';

    // the file exists can be called first before unlinking
    if (file_exists('./func/index22.php')){
        unlink('./func/index22.php');
        echo 'file deleted successfully';
    } else {
        echo 'file couldnt be deleted';
    }

    // updating files
    $fh = fopen("index.php", 'r+') or die('FAiled to open file');
    $text =fgets($fh);

    if(flock($fh, LOCK_EX)){

        
        fseek($fh, 0, SEEK_END);
        fwrite($fh, '$text') or die("Could not write to file");
        flock($fh, LOCK_UN);
    }
    fclose($fh);
        
    echo "File 'index.php' successfully updates";









echo'</pre>';



?>