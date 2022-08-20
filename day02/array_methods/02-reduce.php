<?php
    //array_reduce(array, myfunction, initialvalue);
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    $sum = 0;
    function sum($total, $item){
        echo "<br>";
        print "item $item";
        echo "<br>";
        print "total $total";
        echo "<br>";
        return $item + $total;
    };
    echo array_reduce($numbers, sum); //45
    print_r("<br>");

    $cars = array("Volvo", "Mercedes", "Ferrari");
    function myF($item1, $item2){
        return $item1 . " - " . $item2;
    }
    print_r(array_reduce($cars,myF)); // - Volvo - Mercedes - Ferrari
?>