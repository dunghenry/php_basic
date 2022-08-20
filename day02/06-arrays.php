<?php
    $cars = array("Volvo", "BMW", "Mercedes", "Honda");
    echo "I like to " . $cars[0] . "," . $cars[1] . ", " . $cars[2] ."<br>";

    //length
    echo count($cars); // 4
    echo "<br>";
    //map
    function myF($item){
        echo "$item <br>";
    };
    array_map("myF", $cars);
?>