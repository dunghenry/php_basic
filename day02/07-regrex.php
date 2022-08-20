<?php
    //todo preg_match()
    $str1 = "Hi! Learning PHP";
    $pattern1 = "/php/i";
    echo preg_match($pattern1, $str1); //1
    
    //? preg_match_all
    $str2 = "The rain in SPAIN falls mainly on the plains.";
    $pattern2 = "/ain/i";
    echo preg_match_all($pattern2, $str2); // Outputs 4
  
    //!preg_replace
    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>