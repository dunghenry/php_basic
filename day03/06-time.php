<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    //year
    echo "Year is " . date("Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    echo "<br>";
    //mktime: mktime(hour, minute, second, month, day, year)

    $d=mktime(11, 14, 54, 8, 12, 2022);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    //strtotime(time, now)
    echo "<br>";
    $d1=strtotime("10:30pm April 15 2022");
    echo "Created date is " . date("Y-m-d h:i:sa", $d1);
    echo "<br>";

    $text = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $text);

    echo "<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);
    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
      }

      $d1=strtotime("September 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";
?>