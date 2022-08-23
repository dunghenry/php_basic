<?php
    trait message{
        public function msg(){
            echo "OOP is fun!";
        }
    }
    trait message2{
        public function msg2() {
          echo "OOP reduces code duplication!";
        }
      }
    class Welcome{
        use message, message2;
    }
    $obj = new Welcome();
    $obj->msg2();
    echo "<br>";
    $obj->msg();
?>