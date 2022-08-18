<!-- string -->
<?php
    $str = "Hi";
    echo $str;
    echo "<br>";
    var_dump($str); //string(2) "Hi"
    echo "<br>";
?>

<!-- number -->
<?php
    $x = 10;
    $y = 10.05;
   
    echo $x;
    echo "<br>";
    var_dump($x); //int(10)
    echo "<br>";
    var_dump($y); //float(10.05)
    echo "<br>";
    
?>

<!-- boolean -->
<?php
    $isOnline = false;
    var_dump($isOnline); //bool(false)
    echo "<br>";
?>

<!-- array -->
<?php
    $cars = array("Volvo", "BMW", "Mercedes");
    echo $cars;
    echo "<br>";
    var_dump($cars); //array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(8) "Mercedes" }
    echo "<br>";
?>

<!-- null -->
<?php
    $z = "Ok";
    $z = null;
    var_dump($z); //NULL
    echo "<br>";
?>

<!-- object -->
<?php
   class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
        return "My car is a " . $this->color . " " . $this->model . " !";
        }
    }
    $myCar = new Car("Black", "Mercedes");
    echo $myCar->message(); //My car is a Black Mercedes!
    echo "<br>";
    echo $myCar->color; //Black
    echo "<br>"; 
    echo $myCar->model; //Mercedes
?>