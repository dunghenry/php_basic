<?php
    //! while
    $i = 0;
    while($i < 10){
        echo "The number is: $i <br>";
        $i++;
    }
    $x = 10;
    while($x <= 100){
        echo "The number is: $x <br>";
        $x += 10;
    }

    //? do...while
    $y = 0;
    do{
        echo "The number is: $y <br>";
    }
    while($y < -10);

    do{
        echo "The number is: $y <br>";
        $y++;
    }
    while($y <= 10);

    //todo for
    for($i = 0; $i < 10; $i++){
        echo "The number is: $i <br>";
    }
    for($i = 0; $i < 10; $i+= 2){
        echo "The number is: $i <br>";
    }

    //! foreach
    $colors = array("green", "yellow", "black", "white");
    foreach($colors as $color){
        echo "$color <br>";
    }

    $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($ages as $name => $value) {
    echo "$name = $value<br>";
    }

    //break and continue 

    //for
    for($i = 0; $i < 10; $i++){
        if($i % 2 == 0){
            continue;
        }
        echo "The number is: $i <br>";
    }
    for($i = 0; $i < 10; $i++){
        if($i == 5){
            break;
        }
        echo "The number is: $i <br>";
    }

    // while

    $k = 1;
    while($k < 10){
        if($k == 5){
            break;
        }
        echo "The number is: $k <br>";
        $k++;
    }

    while($k < 10){
        if($k % 2 == 0){
            $k++;
            continue;
        }
        echo "The number is: $k <br>";
        $k++;
    }
?>