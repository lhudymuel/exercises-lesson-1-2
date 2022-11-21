<!DOCTYPE html>
<html>

<head>
    <title>Exercise 3</title>
</head>

<body>

    <table style="width:60%">
   
    
        <?php
        for ($ll = 1; $ll < 5; $ll++) {
            $value = $ll;
            if ($ll % 2 == 0) {
                $color = 'yellow';
                
            } else {
                $color = 'green';
            }
            echo "<tr >";
            echo '<td style="background-color:'. $color .'">'. $value ."</td>";
            echo "</tr>";
        }
        ?>
    
    </table>
    <a href="index.html">Back</a>
</body>

</html>