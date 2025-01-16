<?php
    $a = 20;
    $b = 40;
    echo "Before swap<br>";
    echo "a = $a <br>";
    echo "b = $b <br>";

    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "After swap<br>";

    echo "a = $a <br>";
    echo "b = $b <br>";

?>