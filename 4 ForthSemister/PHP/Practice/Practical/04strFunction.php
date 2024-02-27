<?php
    $string = "Kamla Nehru College";
    echo $string;
    echo "<br>";

    echo "strlen = ".strlen($string);
    echo "<br>";
    
    echo "strrev = ".strrev($string);
    echo "<br>";
    
    echo "strpos = ".strpos($string,"Nehru");
    echo "<br>";
    
    echo "str_replace = ".str_replace("Kamla","Gamla",$string);
    echo "<br>";
    
    echo "str_word_count = ".str_word_count($string);
    echo "<br>";
    
?>