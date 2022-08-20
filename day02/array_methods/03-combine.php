<?php
    //! array_combine(keys, values)
    $fnames =  array("Peter", "John", "Joe");
    $ages = array("11", "29", "30");
    $arrays = array_combine($fnames, $ages);
    foreach ($arrays as $key => $value){
        echo "$key => $value <br>";
    }
?>