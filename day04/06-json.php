<?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    // echo json_encode($age);
    $cars = array("Volvo", "BMW", "Toyota");
    // echo json_encode($cars);

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj));
    $obj = json_decode($jsonobj);
    echo $obj->Peter;
    
    $arr = json_decode($jsonobj, true);
    echo $arr["Peter"];
?>