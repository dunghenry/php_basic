<?php
    $a1 = array(1, 2, 3, 4, 5, 6, 7, 8);
    function funOdd($item){
        return ($item & 1);
    }
    function funEven($item){
        return ($item % 2 == 0);
    }
    print_r(array_filter($a1, funOdd)); //Array ( [0] => 1 [2] => 3 [4] => 5 [6] => 7 )
    print_r(array_filter($a1, funEven)); //Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 )
?>