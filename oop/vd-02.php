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
}

$apple = new Fruit("Apple", 'green');

echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>