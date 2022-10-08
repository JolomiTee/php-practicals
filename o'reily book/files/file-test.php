<?php
    echo "Hey";
    echo '<br/><br/>';



    // if(file_exists('file-test2.php')){
    //     echo "File exists";
    // } else {
    //     echo "File doesn't exist";
    // }

    echo '<br/><br/>';

    // create a file
    // $text = <<<_TEXT
    // Hi, I am Taiwo Jolomi
    // I am a Frontend Developer
    // I am 20 Years old
    // _TEXT;
    
    // $filehandle = fopen("testfile.txt", 'w') or die ("Failed to create file");

    // fwrite($filehandle, $text) or die("Could not write to file");
    // fclose($filehandle);
    // echo "File 'testfile.txt' has been created"; 

    echo '<br/><br/>';
    // reading from files with fgets
    // $fh = fopen("testfile.txt", 'r') or die ("File doesnt exist or you cant open it");

    // $line = fgets($fh);
    // echo $line;

    // echo fgets($fh);
    // fclose($fh);

    // $text = fread($fh, 1000);
    // fclose($fh);
    // echo $text;



    echo '<br/><br/>';
    // copying files

    // copy("testfile.txt", "testfile2.html");
    // // or
    // if (!copy('testfile.txt', 'testfile2.txt')) echo "Couldn't copy file";
    // else echo 'file copied success';

    // moving files

    // rename("testfile2.html", '../func/filetest.txt') ? "Moved Successfully" : "Move Unsuccessful";

    echo '<br/><br/>';
    // UPDATING FILES
    $fh = fopen("testfile.txt", 'r+') or die ("File doesnt exist or you cant open it");

    $text = fgets($fh);

    // fseek($fh, 1, SEEK_END);
    // fwrite($fh, "$text") or die("COuldnt write to file");
    // fclose($fh);

    // echo "File 'testfile.txt' has been updated";
    

    echo '<br/><br/>';
// Locking Fles for Multiple Access
    // if (flock($fh, LOCK_EX)) {
    //     fseek($fh, 0, SEEK_END);
    //     fwrite($fh, "$text") or die("COuldnt write to file");
    //     flock($fh, LOCK_UN);
    // }
    // fclose($fh);

    // echo "File 'testfile.txt' has been updated";



    echo '<br/><br/>';
    echo '<pre>';
    // echo file_get_contents('https://jolomitee.github.io/first-tailwind-project/');
    echo'</pre>';







    echo '<br/><br/>';
    





    echo '<br/><br/>';






    echo '<br/><br/>';
    

?>