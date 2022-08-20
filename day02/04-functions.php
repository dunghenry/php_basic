<?php
    function writeMsg(){
        echo "Hello <br>";
    }
    writeMsg(); // call the function

    //function arguments
    //one argument
    function familyName($fname){
        echo "$fname Refsnes.<br>";
    }
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");

    //two arguments
    function fullName($firstname, $lastname){
        echo "$firstname $lastname <br>";
    }
    fullName("Tran", "Dung");


    //none strict
    function sum(int $a, int $b){
        return $a + $b;
    }
    echo sum(5, "10 days"); // 10: 10 days is changed to int(10)
?>
