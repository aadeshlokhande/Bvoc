<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tables</title>
</head>
<body>
    <?php

        echo "<table border=10 cellpadding=10>";
        echo "<tr>";
        for($a=1; $a<=10; $a++)
        {
            echo "<th>Table of $a</th>";
        }
        echo "</tr>";

        for($a=1; $a<=10; $a++)
        {
            echo "<tr align='center'>";
            for($b=1; $b<=10; $b++)
            {
                echo "<td>".$a*$b."</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
       
    ?>
</body>
</html>