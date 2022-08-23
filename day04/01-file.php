<?php
// echo readfile("data.txt");

    $myfile = fopen("data.txt", "a") or die("Can not open file");
    // echo fread($myfile, filesize("data.txt"));
    // fclose($myfile);

    // echo fgets($myfile);
    // fclose($myfile);

    // echo fgetc($myfile);
    // fclose($myfile); //T


    //fopen : auto create file

    fwrite($myfile, "New Data\n");
    fclose($myfile);
?>