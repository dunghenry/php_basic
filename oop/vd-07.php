<!-- overriding -->
<?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    class Strawberry extends Fruit{
        public $weight;

        //overriding
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
          }
        public function msg(){
            echo "Am I a fruit or a berry? ";
        }
        public function intro(){
            echo "<b>Method overriding</b> the fruit is {$this->name} and the color is {$this->color}.";
        }
    }
    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->msg();
    $strawberry->intro();
    echo "<br>";
    echo $strawberry->name;
    echo "<br>";
    echo $strawberry->color;
    echo "<br>";
    echo $strawberry->weight;
?>