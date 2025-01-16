<html>
<head>
    <title>PHP Basics</title>
</head>
<body>
    <?php
        // Creating variable
        $num1 = 10; 
        $num2 = 20; 
        $float1 = 12.09; 
        $float2 = 97.19; 
        $str1 = "Aadesh"; 
        $str2 = "Lokhande"; 
        // print Statements
        echo "<br>********** print values **********";
        echo "<br>num = ".$num1;
        echo "<br>float = ".$float1;
        echo "<br>str = ".$str1;

        // operator
        echo "<br><br>********** Arithmatic operator **********";
        echo "<br>add = ".$num1 + $num2;
        echo "<br>sub = ".$num1 - $num2;
        echo "<br>multi = ".$num1 * $num2;
        echo "<br>div = ".$num1 / $num2;
        echo "<br>mod = ".$num1 % $num2;

        echo "<br><br>********** Relationship operator **********";
        echo "<br>Greater :-> $num1 > $num2 = ";
        var_dump($num1 > $num2);
        echo "<br>Lessthan :-> $num1 < $num2 = ";
        var_dump($num1 < $num2);
        echo "<br>Equal :-> $num1 == $num2 = ";
        var_dump($num1 == $num2);
        echo "<br>Identical :-> $num1 === $num2 = ";
        var_dump($num1 === $num2);
        echo "<br>not Equal :-> $num1 != $num2 = ";
        var_dump($num1 != $num2);
        echo "<br>Less Equal :-> $num1 <= $num2 = ";
        var_dump($num1 <= $num2);
        echo "<br>Greater equal :-> $num1 >= $num2 = ";
        var_dump($num1 >= $num2);
        echo "<br>Not identical :-> $num1 !== $num2 = ";
        var_dump($num1 !== $num2);
        echo "<br>Not equal :-> $num1 <> $num2 = ";
        var_dump($num1 <> $num2);
        echo "<br>Spaceship :-> $num1 <=> $num2 = ";
        var_dump($num1 <=> $num2);

        echo "<br><br>********** Increment / Decrement Operator **********";
        echo "<br>Pre-increment = ".++$num1;
        echo "<br>Post-increment = ".$num1++;
        echo "<br>Pre-decrement = ".--$num1;
        echo "<br>Post-decrement = ".$num1--;


        echo "<br><br>********** String Operators **********<br>";
        // .	Concatenation
        echo $str1 . $str2;
        echo "<br>";
        // .	Append
        echo $str1 .= $str2;
        echo "<br>";
        
        echo "<br><br>********** if **********";
        if($num1>"5")
        {
            echo "<br>great";
        }

        echo "<br><br>********** if-else **********";
        if($num1>"5")
        {
            echo "<br>Great";
        }
        else 
        {
            echo "<br>Bad";
        }

        echo "<br><br>********** Switch case **********";
        switch($str2)
        {
            case "Aadesh":
                echo "<br>Name";
                break;
            
            case "Lokhande":
                echo "<br>Last Name";
                break;
            
            default:
                echo "<br>Not a name";
        }
        
    ?>
</body>
</html>