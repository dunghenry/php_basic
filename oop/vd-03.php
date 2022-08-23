<?php
class Fruit{
    //Properties
    public $name;
    public $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    //Methods
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

    //A destructor is called when the object is destructed or the script is stopped or exited.
    function __destruct(){
        echo "Destroyed running";
    }
}

$apple = new Fruit("Apple", 'green');

?>