<?php
    $x = 10;
    $y = 10.05;
    echo var_dump(is_int($x)); // bool(true)
    echo "<br>"; 
    echo var_dump(is_float($x)); // bool(false)
    echo "<br>"; 
    echo var_dump(is_float($y)); // bool(true)
    echo "<br>"; 

    //! Infinity
    $z = 1.9e411;
    var_dump($z); //float(INF)
    echo "<br>"; 
    var_dump(is_finite($z)); //bool(false)
    echo "<br>"; 
    var_dump(is_infinite($z)); //bool(true)
    echo "<br>"; 

    //! NaN
    $k = 0 / 0;
    $i = a / v;
    var_dump($k); //float(NAN)
    echo "<br>"; 
    var_dump($i); //float(NAN)
    echo "<br>";
    var_dump(is_nan($i)); //bool(true)
    echo "<br>";

    //? numerical strings
    $number = 124;
    var_dump(is_numeric($number)); //bool(true)
    echo "<br>";
    $num = "123";
    var_dump(is_numeric($num)); //bool(true)
    echo "<br>";
    echo $num + $number; //247
    echo "<br>";
    var_dump(is_numeric("Hehe")); //bool(false)
    echo "<br>";

    //todo casting strings and floats to integers
    $a = 123.123;
    $int_a = (int)$a;
    echo $int_a;
    echo "<br>";
    var_dump($int_a); //int(123)
    echo "<br>";

    $b = "1234,567";
    $int_b = (int)$b;
    echo $int_b; //1234
    echo "<br>";
    var_dump($int_b); //int(1234)
    echo "<br>";

?>