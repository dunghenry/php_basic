<!-- private/protected, public -->
<?php
class Fruit{
    //Properties
    public $name;
    private $color;
    protected $weitgh;

    function set_name($n) {  // a public function (default)
        $this->name = $n;
    }
    protected function set_color($n) { // a protected function
        $this->color = $n;
    }
    private function set_weight($n) { // a private function
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mango';
$mango->set_name('Mango'); // OK
try {
    $mango->color = "yellow"; // ERROR
    $mango->weitgh =  "1.54"; // ERROR
    $mango->set_color('Yellow'); // ERROR
    $mango->set_weight('300'); // ERROR
} catch (Throwable $th) {
    echo $th;
}
?>