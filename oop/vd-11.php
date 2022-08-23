<?php
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound(){
            echo "Meow";
        }
    }
    class Dog implements Animal{
        public function makeSound(){
            echo "Woof";
        }
    }
    class Mouse implements Animal{
        public function makeSound(){
            echo "Squeak";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();

    $animals = array($cat, $dog, $mouse);
    foreach($animals as $animal) {
        $animal->makeSound();
        echo "<br>";
    }
?>