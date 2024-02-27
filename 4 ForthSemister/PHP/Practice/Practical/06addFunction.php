<?php
    function addFun($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }

    $a = 10;
    $b = 20;

    $ans = addFun($a,$b);
    echo "$a + $b = $ans";

?>