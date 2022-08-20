<?php
    $t =  date('H');

    //if
    if($t < "20"){
        echo "Have a good day";
        echo "<br>";
    }

    //if ...else
    if($t < "20"){
        echo "Have a good day";
        echo "<br>";
    }
    else{
        echo "Have a good night";
        echo "<br>";
    }

    //if ...elseif ...else
    if($t < "10"){
        echo "Have a good morning";
        echo "<br>";
    }
    elseif($t < "20"){
        echo "Have a good day";
        echo "<br>";
    }
    else{
        echo "Have a good night";
        echo "<br>";
    }
?>