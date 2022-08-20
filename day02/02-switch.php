<?php
    $color = "red";
    switch ($color) {
        case 'red':
            echo "red";
            echo "<br/>";
            break;
        case 'green':
            echo "green";
            echo "<br/>";
            break;
        case 'yellow':
            echo "yellow";
            echo "<br/>";
            break;
        default:
            echo "Invalid color: $color";
    }
?>