<?php
    define("GREETING", "Welcome to PHP");
    echo GREETING;
    echo "<br>";
    define('MSG', 'This is my message', true);
    echo MSG; //This is my message
    echo "<br>";
    echo msg; //This is my message
    echo "<br>";

    //! constant arrays
    define("cars", ["Mercedes", "Toyota", "Volvo"]);
    echo cars[0]; //Mercedes
    echo "<br>";

    //? constants are global
    function myF(){
        echo GREETING; //Welcome to PHP
    }
    myF();
?>