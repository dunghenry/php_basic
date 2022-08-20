<?php declare(strict_types=1); ?>
<?php
    //array_reverse(array, preserve)
    $b=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
    print_r(array_reverse($b)); //Array ( [c] => Toyota [b] => BMW [a] => Volvo ) 0 => Volvo
    print_r("<br>");
    //More examples
    $a = array("Volvo", "Mercedes", array("Honda", "BMW"));
    foreach ($a as $key => $value){
        echo "$key => $value <br>";
        foreach ($value as $k => $v){
            echo "$k => $v <br>";
        }
    }
    print_r("<br>");
    //! result
    // 0 => Volvo
    // 1 => Mercedes
    // 2 => Array
    // 0 => Honda
    // 1 => BMW

    $reverse=array_reverse($a);
    foreach ($reverse as $key => $value){
        echo "$key => $value <br>";
        foreach ($value as $k => $v){
            echo "$k => $v <br>";
        }
    }
    print_r("<br>");
    //? result : change index
    // 0 => Array
    // 0 => Honda
    // 1 => BMW
    // 1 => Mercedes
    // 2 => Volvo

    $preserve=array_reverse($a,true);
    foreach ($preserve as $key => $value){
        echo "$key => $value <br>";
        foreach ($value as $k => $v){
            echo "$k => $v <br>";
        }
    }
    //? result : Not change index
    // 2 => Array
    // 0 => Honda
    // 1 => BMW
    // 1 => Mercedes
    // 0 => Volvo
?>