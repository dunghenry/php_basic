<!-- protected -->
<?php
    class Fruit{
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        protected function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
        // public function __destruct() {

        // }
    }
    class Strawberry extends Fruit{
        public function msg(){
            echo "Am I a fruit or a berry? ";
            //method protected
            $this->intro();
        }
    }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->msg();
    //$strawberry->intro(); //Error
    echo "<br>";
    echo $strawberry->name;
?>