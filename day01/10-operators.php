<?php
    $x = 10;
    $y = 20;
    echo $x + $y; // 10
    echo "<br>";
    echo $x - $y; // -10
    echo "<br>";
    echo $x * $y; // 200
    echo "<br>";
    echo $x / $y; // 0.5
    echo "<br>";
    echo $x % $y; // 10
    echo "<br>";
    echo ++$x; //11
    echo "<br>";
    echo $x++; //11
    echo "<br>";
    echo $x; //12
    echo "<br>";
    echo 2 ** 2; //4
    echo "<br>";

    $m = 10;
    $n = "10";
    $s = 10;
    // var_dump($m == $n); //bool(true)
    // echo "<br>";
    // var_dump($m === $n); //bool(false)
    // echo "<br>";
    // var_dump($m == $s); //bool(true)
    // echo "<br>";
    // var_dump($m === $s); //bool(false)
    echo "<br>";

    // !=, !==, 

    //todo <>
    var_dump($m <> $n); //bool(false)
    echo "<br>";

    //? <=>
    echo($m <=> 5); // m < n => -1, m = n => 0, m >n => 1
    echo "<br>";
    var_dump($m <=> 5);  //int(1)   
    echo "<br>";

    //todo logical operators
    //! and
    var_dump($m == 10 and $n == 10); // bool(true)
    echo "<br>";

    //todo &&
    var_dump($m == 10 && $n == 10); // bool(true)
    echo "<br>";

    //?or
    var_dump($m == 10 or $n == 100); // bool(true)
    echo "<br>";
    var_dump($m == 100 or $n == 100); // bool(false)
    echo "<br>";

    //! ||
    var_dump($m == 10 || $n == 100); // bool(true)
    echo "<br>";
    var_dump($m == 100 || $n == 100); // bool(false)
    echo "<br>";


    //todo xor
    var_dump($m == 100 xor $n == 100); // bool(false)
    echo "<br>";
    var_dump($m == 10 xor $n == 10); // bool(false)
    echo "<br>";
    var_dump($m == 10 xor $n == 100); // bool(true)
    echo "<br>";

    //? string operators
    $str1 = "Hello";
    $str2 = "World";
    echo $str1 . $str2; // HelloWorld
    echo "<br>";
    $str1 .= $str2;
    echo $str1; //HelloWorld
    echo "<br>";

    //! array operators
    // +
    $arr1 = array("a" => "red", "b" => "green");
    $arr2 = array("c" => "blue", "d" => "yellow");
    $arr3 = array("a" => "red", "b" => "green");
    $arr4 = array("c" => "blue", "d" => "yellow");

    echo $arr1["a"]; //red
    echo "<br>";

    print_r($arr1 + $arr2); //Array ( [a] => red [b] => green [c] => blue [d] => yellow )
    echo "<br>";

    var_dump($arr1 == $arr2); //bool(false)
    echo "<br>";

    var_dump($arr1 == $arr3); //bool(true)
    echo "<br>";

    print_r($arr2 + $arr4); //Array ( [c] => blue [d] => yellow )
    echo "<br>";

    // ===
    var_dump($arr1 === $arr3); //bool(true)
    echo "<br>";
    var_dump($arr1 === $arr2); //bool(false)
    echo "<br>";

    // !=, <>, !==

    //todo conditional assignment operators
    //?	ternary
    $i = 1 > 3 ? 1 : 3;
    echo $i; //3
    echo "<br>";

    // null coalescing
    $null = null;
    $data = $null ?? "Oke";
    echo $data; //Oke

?>