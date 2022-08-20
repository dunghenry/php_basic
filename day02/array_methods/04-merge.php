<?php

    $colors1 = array("green", "yellow", "blue");
    $colors2 = array("red", "blue");
    $arrays_merge = array_merge($colors1, $colors2);
    foreach ($arrays_merge as $key => $value){
        echo "$key => $value <br>";
    }
?>