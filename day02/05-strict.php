<?php declare(strict_types=1); // strict requirement
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    //echo addNumbers(5, "5 days"); /// since strict is enabled and "5 days" is not an integer, an error will be thrown
    // echo addNumbers(5, 5); //10
    //default value
    function setHeight(int $minHeight = 100){
        echo "The height is : $minHeight <br>";
    }
    setHeight();    // The height is : 100
    setHeight(200); // The height is : 200


    //returning values
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = ". sum(5, 10) . "<br>";

    // return type declarations
    function addNumbers1(float $c, float $d) : int {
        return (int)($c + $d);
    }

    function addNumbers2(float $a, float $b) : float {
        return $a + $b;
    }

    echo "1.5 + 2.5 = ". addNumbers1(1.5, 2.5) . "<br>";
    echo "1.5 + 2 = ". addNumbers2(1.5, 2) . "<br>";

    //? passing arguments by reference
    function add_five(&$value){
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num; // 7
?>