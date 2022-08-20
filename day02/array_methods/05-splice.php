<?php
    //todo array_splice(array, start, length, array)
    $colors1 = array("green", "yellow", "blue");
    $colors2 = array("red", "black");
    array_splice($colors1,0, 2, $colors2);
    foreach ($colors1 as $key => $value){
        echo "$key => $value <br>";
    }

    //? result
    // 0 => red
    // 1 => black
    // 2 => blue

    //! More examples
    $a1 = array("a" => "red", "b" => "black", "c" => "blue");
    $a2 = array("a" => "purple", "b" => "white");
    $a3 = array_splice($a1,0,2,$a2);
    foreach ($a3 as $key => $value){
        echo "$key => $value <br>";
    }
    //? result
    // a => red
    // b => black

    $a4 = array("0" => "red", "1" => "black");
    $a5 = array("0" => "white", "1" => "orange");
    array_splice($a4, 1, 0, $a5);
    foreach ($a4 as $key => $value){
        echo "$key => $value <br>";
    }

    //? result
    // 0 => red
    // 1 => white
    // 2 => orange
    // 3 => black

    print_r(array_splice($a4, 1, 0, $a5)); //Array ( )
?>