<?php
    $color = "red";
    $fullname = "Tran Van Dung";
    $x = 5;
    $y = 10;
    $sum =  $x + $y;
    echo "<h1>My color: $color</h1>";
    echo "Xin chao {$fullname}";
    echo "Xin chao ".$fullname;
    echo "<p>{$sum}</p>";
    echo $x + $y;
?>
<!-- variable global scope -->
<?php
    $x = 10;
    function myF(){
        echo "<p>{$x}</p>"; //error
    }
    myF();
    echo "<p>{$x}</p>"; //10
?>
<!-- variable local scope -->
<?php
    function myFunc(){
        $z = 100;
        echo "<p>{$z}</p>"; //100
    }
    myFunc();
    echo $z; // error
?>