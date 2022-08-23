<?php
    class Goobye{
        const STATUS = "OK";
        public function bye(){
            echo self::STATUS;
        }
    }
    $goodbye = new Goobye();

    echo Goobye::STATUS;
    echo "<br>";
    $goodbye->bye();
    echo "<br>";

?>