<html>
<head>
    <title> For Loop Practice</title>
</head>
    <body>
        <?php
            $name = "AADESH";
            for($n=1;$n<=6;$n++)
            {
                for($m=0;$m<$n;$m++)
                {
                    echo "$name[$m] ";
                }
                echo "<br><br>";
            }
        ?>  
    </body>
</html>