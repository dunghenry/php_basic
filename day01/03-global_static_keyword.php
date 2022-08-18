<!-- global keyword -->
<?php
    $x = 10;
    $y = 100;
    function myF(){
        global $x,$y;
        $y += $x;
    }
    myF();
    echo $y; //110
?>

<?php
    $z = 100;
    $k = 100;
    function myF1(){
        $GLOBALS['z'] = $GLOBALS['z'] + $GLOBALS['k'];
    }  
    myF1();
    echo $z; // 200
?>
<!-- static keyword -->
<?php
    function myF2(){
        $x = 10;
        echo $x;
        ++$x;
    }
    myF2(); //10
    myF2(); //10
    myF2(); //10
?>

<?php
    function myF3(){
        static $x = 10;
        echo $x;
        $x++;
    }
    myF3(); //10
    myF3(); //11
    myF3(); //12
?>