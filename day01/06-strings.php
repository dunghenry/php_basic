
<?php
    $str = "Hello World";
    //length
    echo strlen($str); //11
    echo "<br>";
    
    //count words 
    echo str_word_count($str); //2
    echo "<br>";

    //reverse a string
    echo strrev($str); //dlroW olleH
    echo "<br>";

    //search for a text within a string
    echo strpos($str, 'World'); // 6
    echo "<br>";
    echo strpos($str, 'haha'); // false
    echo "<br>";
    
    echo str_replace("World", "Dung", $str); //Hello Dung
    echo "<br>"; 
?>
