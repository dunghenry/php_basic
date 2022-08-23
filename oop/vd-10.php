<!-- abstract class -->
<?php
    abstract class Car{
      public $name;
      public function __construct($name){
        $this->name = $name;
      }
      abstract public function intro() : string;
    }
    class Audi extends Car{
      public function intro(): string{
        return "Choose German quality! I'm an $this->name!";
      }
    }
    class Volvo extends Car {
      public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
      }
    }
    class Citroen extends Car {
      public function intro() : string {
        return "French extravagance! I'm a $this->name!";
      }
    }
    $audi = new audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new citroen("Citroen");
    echo $citroen->intro();
    echo "<br>";
?>

<?php
    abstract class ParentClass{
      abstract protected function prefixName($name);
    }
    class ChildrenClass extends ParentClass{
      public function prefixName($name){
        if($name == "Tran Dung"){
          $prefix = "Mr.";
        }
        elseif($name == "Tran Hoa"){
          $prefix = "Mrs.";
        }
        else{
          $prefix = "";
        }
        return "{$prefix} {$name}";
      }
    }
    $pr = new ChildrenClass;
    echo $pr->prefixName("Tran Dung");
    echo "<br>";
?>

<?php
abstract class ParentClass1 {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass1 extends ParentClass1 {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass1;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
?>