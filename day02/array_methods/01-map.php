<?php
    // array_map(myfunction, array1, array2, array3, ...)
    $cars = array("Volvo", "Mercedes", "Ferrari", "Toyota");
    function myCallback($item){
        echo "$item <br>";
    }
    array_map(myCallback, $cars);
?>