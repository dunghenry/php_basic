<?php
    class Fruit{
        //Properties
        public $name;
        public $color;

        //Methods

        //change name
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    $orange = new Fruit();
    $apple->set_name("Apple");
    $orange->set_name("Orange");
    $apple->set_color("green");
    $orange->set_color("orange");
    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $orange->get_name();
    echo "<br>";
    echo $orange->get_color();

    $apple->name = "Apple Update";
    echo "<br>";
    echo $apple->get_name();
    echo "<br>";

    // instanceof
    var_dump($apple instanceof Fruit); //bool(true)
?>